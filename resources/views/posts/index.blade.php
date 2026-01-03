@extends('layouts.master')

@section('title', 'Blog')

@section('content')
<h1>Blog</h1>
<a href="/posts/create">Create Post</a>


@foreach ($posts as $post)
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->content }}</p>
@endforeach

@endsection

