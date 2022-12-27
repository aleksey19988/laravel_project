<?php
    $likeIcons = [
        '&#129505;',
        '&#128154;',
        '&#128153;',
        '&#128156;',
        '&#128155;',
        '&#10084;',
    ];
    function getLikesIcon($likeIcons)
    {
        return $likeIcons[rand(0, count($likeIcons) - 1)];
    }
?>
@extends('layouts.header')

@section('title', 'MY BLOG')

@section('content')
    <h1 class="content-title">Aleksey's blog</h1>

    <div class="posts-container">
        <div class="post">
            <div class="content">
                <h2 class="title"><a href="#">Title 1</a></h2>
                <p class="content-text">
                    Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "р
                    ,   успешно пережил без заметных изменений пять веков часто используемый в печати и вэб-дизайне. Lorem Ipsum
                    является стандартной "р
                </p>
                <div class="likes">
                    <span class="likes-icon"><?= getLikesIcon($likeIcons); ?></span>
                    <span class="likes-count">2</span>
                </div>
            </div>
            <img src="{{ asset('img/rectangle.png') }}" alt="Cover" class="cover-img">
        </div>
        <div class="post">
            <div class="content">
                <h2 class="title"><a href="#">Title 2</a></h2>
                <p class="content-text">
                    Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "р
                    ,   успешно пережил без заметных изменений пять веков часто используемый в печати и вэб-дизайне. Lorem Ipsum
                    является стандартной "р
                </p>
                <div class="likes">
                    <span class="likes-icon"><?= getLikesIcon($likeIcons); ?></span>
                    <span class="likes-count">68</span>
                </div>
            </div>
{{--            <img src="{{ asset('img/rectangle.png') }}" alt="Cover" class="cover-img">--}}
        </div>
        <div class="post">
            <div class="content">
                <h2 class="title"><a href="#">Title 3</a></h2>
                <p class="content-text">
                    Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "р
                    ,   успешно пережил без заметных изменений пять веков часто используемый в печати и вэб-дизайне. Lorem Ipsum
                    является стандартной "р
                </p>
                <div class="likes">
                    <span class="likes-icon"><?= getLikesIcon($likeIcons); ?></span>
                    <span class="likes-count">5</span>
                </div>
            </div>
            <img src="{{ asset('img/rectangle.png') }}" alt="Cover" class="cover-img">
        </div>
    </div>
@endsection
