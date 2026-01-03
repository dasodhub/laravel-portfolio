@extends('layouts.master')

@section('title', 'Edit Post')

@section('content')

<h1>Edit Post</h1>

<form action="/posts/edit/{{ $post->id }}" method="POST">
    @csrf
    <label for="title">Title:</label>
    <input type="text" id="title" value="{{ $post->title }}" name="title" placeholder="Title" required>
    <br>
    <label for="content">Content:</label>
    <textarea id="content" placeholder="Content" name="content" required>{{ $post->content }}</textarea>
    <br>
    <button type="submit">Edit</button>
</form>

@endsection
