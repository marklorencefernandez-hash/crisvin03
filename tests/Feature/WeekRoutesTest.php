<?php

namespace Tests\Feature;

use Tests\TestCase;

class WeekRoutesTest extends TestCase
{
    public function test_semester_home_and_week_routes_are_available(): void
    {
        $this->get('/')->assertOk()->assertSee('One Codespace');
        $this->get('/weeks/11')->assertOk()->assertSee('Introduction to PHP');
        $this->get('/weeks/13')->assertOk()->assertSee('MVC');
        $this->get('/my-project')->assertOk()->assertSee('Sample A');
    }
}
