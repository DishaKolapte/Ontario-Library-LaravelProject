<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Models\Author;
use App\Models\Book;

Route::get('/', function () {
    $authors = Author::all();
    $books = Book::all();
    return view('index', compact('authors', 'books'));
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('authors', AuthorController::class);
Route::resource('books', BookController::class);

// Routes restricted to authenticated users
Route::middleware(['auth'])->group(function () {
    Route::resource('authors', AuthorController::class)->except(['index', 'show']);
    Route::resource('books', BookController::class)->except(['index', 'show']);
});

require __DIR__.'/auth.php';
