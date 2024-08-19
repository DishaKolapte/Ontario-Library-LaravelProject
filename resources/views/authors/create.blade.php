<!-- resources/views/authors/create.blade.php -->

@extends('layout')

@section('title', 'Add Author')

@section('content')
    <div class="form-container">
        <h1>Add New Author</h1>

        <form action="{{ route('authors.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" required>
                @error('name')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="biography">Biography:</label>
                <textarea name="biography" id="biography">{{ old('biography') }}</textarea>
            </div>
            <button type="submit" class="btn">Create Author</button>
        </form>

        <a href="{{ route('authors.index') }}" class="btn btn-danger">Back to Authors</a>
    </div>
@endsection
