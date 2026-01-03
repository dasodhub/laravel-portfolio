@extends('layouts.master')

@section('title', '{{ $post->title }}')

@section('content')
<h1>Post Content</h1>

<h2>{{ $post->title }}</h2>
<p>{{ $post->content }}</p>

<div>
    <a href="./edit/{{ $post->id }}">Edit</a>
    <a href="./delete/{{ $post->id }}">Delete</a>
</div>
@endsection
