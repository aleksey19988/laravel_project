<?php

/* @var array $posts */
/* @var \App\Models\Post $post */

?>
@extends('layouts.header')

@section('style', asset('css/index/style.css'))

@section('title', 'MY BLOG')

@section('header title', 'Admin panel')

@section('content')
    <h1 class="content-title mt-5 mb-5">Creating new post</h1>
@endsection
