<?php

/* @var array $attributes */
/* @var array $posts */

?>
@extends('layouts.header')

@section('style', asset('css/backend/style.css'))

@section('title', 'MY BLOG')

@section('header title', 'Admin panel')

@section('content')
    <h1 class="content-title mt-5 mb-5">Список постов</h1>

    <table class="table table-dark">
        <thead>
        <tr>
            @foreach($attributes as $key => $value)
                <th scope="col">{{ $key }}</th>
            @endforeach
            <th scope="col">###</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <th scope="row">{{ $post->id }}</th>
                <td>{{ $post->title }}</td>
                <td>{{ $post->content }}</td>
                <td>{{ $post->image }}</td>
                <td>{{ $post->likes }}</td>
                <td>
                    @if($post->is_published === 1)
                        yes
                    @else
                        no
                    @endif
                </td>
                <td>{{ $post->created_at }}</td>
                <td>{{ $post->updated_at }}</td>
                <td><a href="./edit/{{ $post->id }}">Edit</a></td>
            </tr>
        @endforeach

        </tbody>
    </table>
@endsection
