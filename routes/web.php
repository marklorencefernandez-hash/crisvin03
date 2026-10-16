<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\StudentProjectController;
use App\Http\Controllers\Week12Controller;
use App\Http\Controllers\Week13Controller;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

// Week 11 — Composer PSR-4, namespaces, model/service/report.
Route::get('/demo', [DemoController::class, 'index'])->name('demo');
Route::get('/weeks/11', [DemoController::class, 'index'])->name('week11.index');

// Week 12 — direct PDO CRUD (not Eloquent). Laravel supplies validation and CSRF.
Route::get('/weeks/12', [Week12Controller::class, 'index'])->name('week12.index');
Route::post('/weeks/12/items', [Week12Controller::class, 'store'])->name('week12.store');
Route::patch('/weeks/12/items/{id}', [Week12Controller::class, 'update'])->whereNumber('id')->name('week12.update');
Route::delete('/weeks/12/items/{id}', [Week12Controller::class, 'destroy'])->whereNumber('id')->name('week12.destroy');

// Week 13 — route/controller/service/model/Blade MVC demonstration.
Route::get('/weeks/13', Week13Controller::class)->name('week13.index');

// Week 17 — student-chosen, evolving final-project workspace.
Route::get('/my-project', StudentProjectController::class)->name('project.index');
