<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class PostController extends Controller
{
    const MAX_CONTENT_LENGTH_WITH_IMAGE = 45;
    const MAX_CONTENT_LENGTH_WITHOUT_IMAGE = 60;

    private $likesIcons = [
        '&#129505;',
        '&#128154;',
        '&#128153;',
        '&#128156;',
        '&#128155;',
        '&#10084;',
    ];

    public $likesIcon;

    public function index()
    {
        $posts = Post::all();

        if (!empty($posts)) {
            $posts = $this->cutPostContent($posts);
        }

        $posts = $this->setLikesIcons($posts);

        return view('home', [
            'posts' => $posts,
        ]);
    }

    private function cutPostContent(Collection $posts): array
    {
        $result = [];

        foreach ($posts as $post) {
            if (isset($post->image)) {
                if (strlen($post->content) > self::MAX_CONTENT_LENGTH_WITH_IMAGE) {
                    $post->content = substr($post->content, 0, self::MAX_CONTENT_LENGTH_WITH_IMAGE) . '...';
                }
            } elseif (strlen($post->content) > self::MAX_CONTENT_LENGTH_WITHOUT_IMAGE) {
                $post->content = substr($post->content, 0, self::MAX_CONTENT_LENGTH_WITHOUT_IMAGE) . '...';
            }
            $result[] = $post;
        }

        return $result;
    }

    private function setLikesIcons($posts)
    {
        foreach($posts as $post) {
            $icons = $this->getLikesIcons();
            $post->likesIcon = $icons[rand(0, count($this->likesIcons) - 1)];
        }

        return $posts;
    }

    public function getLikesIcons(): array
    {
        return $this->likesIcons;
    }
}
