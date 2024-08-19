@extends('layout')

@section('content')
    <h1>Edit Author</h1>
    <form action="{{ route('authors.update', $author->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ $author->name }}" required>
        </div>
        <div>
            <label for="biography">Biography:</label>
            <textarea id="biography" name="biography" required>{{ $author->biography }}</textarea>
        </div>
        <button type="submit" class="btn">Update</button>
    </form>
@endsection
