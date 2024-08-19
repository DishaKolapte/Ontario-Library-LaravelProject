
@extends('layout')

@section('title', 'Books')

@section('content')
    <h1>Books</h1>
    @auth
        <a href="{{ route('books.create') }}" class="btn">Add Book</a>
    @endauth

    <ul>
        @foreach($books as $book)
            <li><a href="{{ route('books.show', $book->id) }}">{{ $book->title }}</a></li>
        @endforeach
    </ul>
@endsection
