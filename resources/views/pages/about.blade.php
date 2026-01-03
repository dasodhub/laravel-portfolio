@extends('layouts.master')
@section('title', 'About')

@section('content')

<h1>About {{ $name }}</h1>
<ul>
    @foreach ($skills as $skill )
        <li>{{ $skill }}</li>
    @endforeach
</ul>

@endsection
