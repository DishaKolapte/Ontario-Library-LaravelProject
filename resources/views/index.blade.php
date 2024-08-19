
@extends('layout')

@section('title', 'Home')

@section('content')
    <h1>Welcome to the Author & Book Management System</h1>
    <p>This is a simple application to manage authors and books. You can view authors and books below.</p>
    @auth
        <h2>Manage Authors and Books</h2>
        <a href="{{ route('authors.create') }}" class="btn">Add Author</a>
        <a href="{{ route('books.create') }}" class="btn">Add Book</a>
    @endauth
@endsection
