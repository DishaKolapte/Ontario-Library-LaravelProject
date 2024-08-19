
@extends('layout')

@section('title', $author->name)

@section('content')
    <h1>{{ $author->name }}</h1>
    <p>{{ $author->biography }}</p>
    @auth
        <a href="{{ route('authors.edit', $author->id) }}" class="btn">Edit</a>
        <form action="{{ route('authors.destroy', $author->id) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn-danger">Delete</button>
        </form>
    @endauth
    <a href="{{ route('authors.index') }}" class="btn">Back to Authors</a>
@endsection
