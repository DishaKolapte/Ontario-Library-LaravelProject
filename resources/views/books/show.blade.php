
@extends('layout')

@section('title', $book->title)

@section('content')
    <h1>{{ $book->title }}</h1>
    <p>{{ $book->summary }}</p>
    <p><strong>Author:</strong> {{ $book->author->name }}</p>
    @auth
        <a href="{{ route('books.edit', $book->id) }}" class="btn">Edit</a>
        <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn-danger">Delete</button>
        </form>
    @endauth
    <a href="{{ route('books.index') }}" class="btn">Back to Books</a>
@endsection
