@extends('layouts.master')

@section('title', 'Blog')

@section('content')
<h1>Blog</h1>
<a href="/posts/create">Create Post</a>


@foreach ($posts as $post)
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->content }}</p>
    <div>
        <a href="/posts/{{ $post->id }}">Read More</a>
        <a href="/posts/edit/{{ $post->id }}">Edit</a>
        <a href="/posts/delete/{{ $post->id }}">Delete</a>
    </div>
@endforeach

@endsection

