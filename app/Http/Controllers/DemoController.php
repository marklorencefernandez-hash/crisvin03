<?php

namespace App\Http\Controllers;

use App\Reports\BookReport;
use App\Services\BookService;
use Illuminate\Contracts\View\View;

class DemoController extends Controller
{
    public function index(BookService $service, BookReport $report): View
    {
        $records = [];

        foreach ($service->sampleBooks() as $book) {
            $records[] = array_merge(
                $service->getDetails($book),
                ['summary' => $report->getSummary($book)]
            );
        }

        return view('demo', [
            'projectTitle' => 'Library Borrowing System',
            'records' => $records,
        ]);
    }
}
