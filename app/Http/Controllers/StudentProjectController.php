<?php

namespace App\Http\Controllers;

use App\StudentProject\Reports\ProjectReport;
use App\StudentProject\Services\ProjectService;
use Illuminate\Contracts\View\View;

final class StudentProjectController extends Controller
{
    public function __invoke(ProjectService $service, ProjectReport $report): View
    {
        $records = [];
        foreach ($service->samples() as $item) {
            $records[] = [...$service->details($item), 'summary' => $report->summarize($item)];
        }
        return view('student-project', ['records' => $records]);
    }
}
