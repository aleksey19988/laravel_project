<?php

/* @var \App\Models\Post $post */

?>
@extends('layouts.header')

@section('style', asset('css/post/style.css'))

@section('title', $post->title)

@section('content')
    <div class="container posts-container">
        <div class="post">
            <div class="content">
                <h2 class="title"><a href="#">{{ $post->title }}</a></h2>
                @if(isset($post->image))
                    <div class="img-container">
                        <img src="{{ asset($post->image) }}" alt="Cover" class="cover-img">
                    </div>
                @endif
                <p class="content-text">{{ $post->content}}</p>
                <div class="likes">
                    <span class="likes-icon"><?= $post->likesIcon; ?></span>
                    <span class="likes-count">{{ $post->likes }}</span>
                </div>
            </div>

        </div>
    </div>
@endsection
