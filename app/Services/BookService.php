<?php

namespace App\Services;

use App\Models\Book as LibraryBook;

class BookService
{
    /** @return list<LibraryBook> */
    public function sampleBooks(): array
    {
        return [
            new LibraryBook([
                'title' => 'Introduction to PHP',
                'author' => 'Ana Reyes',
            ]),
            new LibraryBook([
                'title' => 'Database Basics',
                'author' => 'Marco Cruz',
            ]),
        ];
    }

    /** @return array{title: string, author: string} */
    public function getDetails(LibraryBook $book): array
    {
        return [
            'title' => (string) $book->title,
            'author' => (string) $book->author,
        ];
    }
}
