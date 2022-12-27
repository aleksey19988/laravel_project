<?php

/* @var array $posts */
/* @var \App\Models\Post $post */

?>
@extends('layouts.header')

@section('style', asset('css/index/style.css'))

@section('title', 'MY BLOG')

@section('content')
    <h1 class="content-title">Aleksey's blog</h1>

    <div class="container posts-container">
        @foreach($posts as $post)
                <div class="post">
                    <div class="content">
                        <h2 class="title"><a href="./post/{{ $post->id  }}">{{ $post->title }}</a></h2>
                        <p class="content-text">{{ $post->content }}</p>
                        <div class="likes">
                            <span class="likes-icon"><?= $post->likesIcon; ?></span>
                            <span class="likes-count">{{ $post->likes }}</span>
                        </div>
                    </div>
                    @if(isset($post->image))
                        <img src="{{ asset($post->image) }}" alt="Cover" class="cover-img">
                    @endif
                </div>
        @endforeach
    </div>
@endsection
