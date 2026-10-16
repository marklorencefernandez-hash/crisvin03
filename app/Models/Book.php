<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // No database table is needed for this first activity.
    // Two example books are created in memory by BookService.
    protected $fillable = ['title', 'author'];
}
