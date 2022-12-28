<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    const MAX_CONTENT_LENGTH_WITH_IMAGE = 100;
    const MAX_CONTENT_LENGTH_WITHOUT_IMAGE = 150;

    private $likesIcons = [
        '&#129505;',
        '&#128154;',
        '&#128153;',
        '&#128156;',
        '&#128155;',
        '&#10084;',
    ];

    public function index()
    {
        $posts = Post::all();

        if (!empty($posts)) {
            $posts = $this->cutPostContent($posts);

            foreach ($posts as $post) {
                $post = $this->setLikesIcon($post);
            }
        }

        return view('backend.index', [
            'posts' => $posts,
        ]);
    }

    public function create()
    {
        return view('backend.create', []);
    }

    public function getPostsList()
    {
        $posts = Post::all();

        $attributes = $posts[0]->getAttributes();

        return view('backend.posts-list', [
            'attributes' => $attributes,
            'posts' => $this->cutPostContent($posts),
        ]);
    }

    private function cutPostContent($posts): array
    {
        $result = [];

        foreach ($posts as $post) {
            if (isset($post->image)) {
                $length = strlen($post->content);
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

    private function setLikesIcon($post)
    {
            $icons = $this->getLikesIcons();
            $post->likesIcon = $icons[rand(0, count($this->likesIcons) - 1)];

            return $post;
    }

    public function getLikesIcons(): array
    {
        return $this->likesIcons;
    }

    public function showPost(int $id)
    {
        $post = Post::query()->find($id);

        $post = $this->setLikesIcon($post);

        return view('post', [
            'post' => $post,
        ]);
    }
}
