<?php

/* @var array $posts */
/* @var \App\Models\Post $post */

?>
@extends('layouts.header')

@section('style', asset('css/backend/style.css'))

@section('title', 'Admin panel')

@section('header title', 'MY BLOG')

@section('content')
    <h1 class="content-title mt-5 mb-5">Aleksey's blog's admin panel</h1>

    <div class="list-group col-lg-4 col-md-6 col-sm-12 mt-5">
        <a href="{{ url()->current() }}/create" class="list-group-item list-group-item-action list-group-item-dark">Создать новый пост</a>
        <a href="{{ url()->current() }}/posts-list" class="list-group-item list-group-item-action list-group-item-dark">Вывести список постов</a>
    </div>
@endsection
