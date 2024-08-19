
@extends('layout')

@section('title', 'Add Book')

@section('content')
    <div class="form-container">
        <h1>Add New Book</h1>

        <form action="{{ route('books.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" value="{{ old('title') }}" required>
                @error('title')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="author_id">Author:</label>
                <select name="author_id" id="author_id" required>
                    <option value="">Select an author</option>
                    @foreach ($authors as $author)
                        <option value="{{ $author->id }}" {{ old('author_id') == $author->id ? 'selected' : '' }}>
                            {{ $author->name }}
                        </option>
                    @endforeach
                </select>
                @error('author_id')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="summary">Summary:</label>
                <textarea name="summary" id="summary">{{ old('summary') }}</textarea>
            </div>
            <button type="submit" class="btn">Create Book</button>
        </form>

        <a href="{{ route('books.index') }}" class="btn btn-danger">Back to Books</a>
    </div>
@endsection
