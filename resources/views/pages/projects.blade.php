@extends('layouts.master')
@section('title', 'Projects')

@section('content')

<h1>My Projects</h1>
<p>Here are some of the projects I have worked on:</p>

@foreach ($projects as $project)
    <div>
        <h2>{{ $project['title'] }}</h2>
        <p>{{ $project['description'] }}</p>
    </div>

@endforeach
@endsection
