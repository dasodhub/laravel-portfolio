@extends('layouts.master')

@section('title', 'Contact')

@section('content')

<h1>Contact Us</h1>
<p>have an exciting project? Let's work together!</p>`

<div>
    <form action="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>

        <button type="submit">Send Message</button>
    </form>
</div>

@endsection
