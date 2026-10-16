<?php

namespace App\Reports;

use App\Models\Book;

class BookReport
{
    public function getSummary(Book $book): string
    {
        return 'Summary: '.$book->title.' is available in the library.';
    }
}
