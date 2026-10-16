<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_home_page_shows_semester_labs(): void
    {
        $this->get('/')->assertOk()->assertSee('Namespaces and Autoloading')->assertSee('PDO, CRUD, Prepared Statements');
    }

    public function test_week_11_example_still_has_two_records(): void
    {
        $this->get('/demo')->assertOk()->assertSee('Introduction to PHP')->assertSee('Database Basics');
    }
}
