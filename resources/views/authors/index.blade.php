
@extends('layout')

@section('title', 'Authors')

@section('content')
    <h1>Authors</h1>
    @auth
        <a href="{{ route('authors.create') }}" class="btn">Add Author</a>
    @endauth

    <ul>
        @foreach($authors as $author)
            <li><a href="{{ route('authors.show', $author->id) }}">{{ $author->name }}</a></li>
        @endforeach
    </ul>
@endsection
