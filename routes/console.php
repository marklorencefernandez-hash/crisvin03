<?php

use App\Database\InventoryRepository;
use App\Database\PdoSqliteFactory;
use App\Reports\BookReport;
use App\Services\BookService;
use App\StudentProject\Reports\ProjectReport;
use App\StudentProject\Services\ProjectService;
use Illuminate\Support\Facades\Artisan;

Artisan::command('oop:demo', function (BookService $service, BookReport $report) {
    $this->info('=== WEEK 11: NAMESPACES AND COMPOSER AUTOLOADING ===');
    foreach ($service->sampleBooks() as $i => $book) {
        $this->line('Record '.($i + 1).':');
        foreach ($service->getDetails($book) as $field => $value) {
            $this->line(ucfirst($field).': '.$value);
        }
        $this->line($report->getSummary($book));
        $this->newLine();
    }
})->purpose('Week 11: PSR-4 namespaces, use alias, and Composer loading');

Artisan::command('oop:pdo-demo', function () {
    // An in-memory SQLite DB makes the CLI exercise safe and repeatable.
    $repo = new InventoryRepository(PdoSqliteFactory::connect(':memory:'));
    $this->info('=== WEEK 12: PDO CRUD AND PREPARED STATEMENTS ===');
    $one = $repo->create('Notebook', 5);
    $two = $repo->create('Pencil', 12);
    $this->line('CREATE: inserted #'.$one.' and #'.$two);
    foreach ($repo->all() as $item) {
        $this->line('READ: #'.$item['id'].' '.$item['name'].' qty='.$item['quantity']);
    }
    $repo->update($one, 'Notebook', 8);
    $updated = $repo->find($one);
    $this->line('UPDATE: Notebook quantity='.$updated['quantity']);
    $repo->delete($two);
    $this->line('DELETE: removed Pencil; remaining='.count($repo->all()));
    $this->info('All operations used direct PDO (not Eloquent).');
})->purpose('Week 12: independent safe CRUD demonstration with raw PDO');

Artisan::command('oop:project', function (ProjectService $service, ProjectReport $report) {
    $this->info('=== MY STUDENT-SELECTED OOP PROJECT ===');
    foreach ($service->samples() as $i => $item) {
        $this->line('Record '.($i + 1).':');
        foreach ($service->details($item) as $field => $value) {
            $this->line(ucfirst($field).': '.$value);
        }
        $this->line($report->summarize($item));
        $this->newLine();
    }
})->purpose('Run the students own model, service and report from Week 11 onward');
