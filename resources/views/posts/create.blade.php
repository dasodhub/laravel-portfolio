@extends('layouts.master')

@section('title', 'Create Post')

@section('content')

<h1>Create Post</h1>

<form action="/posts" method="POST">
    @csrf
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" placeholder="Title" required>
    <br>
    <label for="content">Content:</label>
    <textarea id="content" placeholder="Content" name="content" required></textarea>
    <br>
    <button type="submit">Save</button>
</form>

@endsection
