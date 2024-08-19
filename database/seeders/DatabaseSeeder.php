<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Author;
use App\Models\Book;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run()
    {

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ]);

        $author = Author::create([
            'name' => 'J.K. Rowling',
            'biography' => 'Author of Harry Potter',
        ]);

        Book::create([
            'title' => 'Harry Potter and the Philosopher\'s Stone',
            'author_id' => $author->id,
            'summary' => 'The first book in the Harry Potter series',
        ]);

        Book::create([
            'title' => 'Harry Potter and the Chamber of Secrets',
            'author_id' => $author->id,
            'summary' => 'The second book in the Harry Potter series',
        ]);

        Book::create([
            'title' => 'Harry Potter and the Prisoner of Azkaban',
            'author_id' => $author->id,
            'summary' => 'The third book in the Harry Potter series',
        ]);

        Book::create([
            'title' => 'Harry Potter and the Goblet of Fire',
            'author_id' => $author->id,
            'summary' => 'The fourth book in the Harry Potter series',
        ]);

        Book::create([
            'title' => 'Harry Potter and the Order of the Phoenix',
            'author_id' => $author->id,
            'summary' => 'The fifth book in the Harry Potter series',
        ]);
    }
}
