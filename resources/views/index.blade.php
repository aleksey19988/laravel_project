<?php

/* @var array $posts */
/* @var \App\Models\Post $post */

?>
@extends('layouts.header')

@section('style', asset('css/index/style.css'))

@section('title', 'MY BLOG')

@section('header title', 'MY BLOG')

@section('content')
    <h1 class="content-title">Aleksey's blog</h1>

    <div class="container posts-container">
        @foreach($posts as $post)
                <div class="post">
                    <div class="content">
                        <h2 class="title"><a href="./post/{{ $post->id  }}">{{ $post->title }}</a></h2>
                        @if(isset($post->image))
                            <div class="img-container img-container-mobile" style="background-image: url('{{ asset($post->image) }}')"></div>
                        @endif
                        <p class="content-text">{{ $post->content }}</p>
                        <div class="likes">
                            <span class="likes-icon"><?= $post->likesIcon; ?></span>
                            <span class="likes-count">{{ $post->likes }}</span>
                        </div>
                    </div>
                    @if(isset($post->image))
                        <div class="img-container img-container-desktop" style="background-image: url('{{ asset($post->image) }}')"></div>
                    @endif
                </div>
        @endforeach
    </div>
@endsection
