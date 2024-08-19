@extends('layout')

@section('content')
    <h1>Edit Book</h1>
    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{ $book->title }}" required>
        </div>
        <div>
            <label for="author_id">Author:</label>
            <select id="author_id" name="author_id" required>
                @foreach ($authors as $author)
                    <option value="{{ $author->id }}" @if($book->author_id == $author->id) selected @endif>{{ $author->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="summary">Summary:</label>
            <textarea id="summary" name="summary" required>{{ $book->summary }}</textarea>
        </div>
        <button type="submit" class="btn">Update</button>
    </form>
@endsection
