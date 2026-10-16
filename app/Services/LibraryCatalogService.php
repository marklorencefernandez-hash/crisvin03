<?php

namespace App\Services;

use App\Reports\BookReport;

/** Week 13: reusable application/service logic shared by HTTP controllers. */
final class LibraryCatalogService
{
    public function __construct(private BookService $books, private BookReport $report)
    {
    }

    /** @return list<array{title: string, author: string, summary: string}> */
    public function cards(): array
    {
        $cards = [];
        foreach ($this->books->sampleBooks() as $book) {
            $cards[] = [...$this->books->getDetails($book), 'summary' => $this->report->getSummary($book)];
        }
        return $cards;
    }
}
