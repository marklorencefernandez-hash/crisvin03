<?php

namespace Tests\Feature;

use Tests\TestCase;

class Week12FormTest extends TestCase
{
    public function test_bad_input_for_create_is_rejected(): void
    {
        $this->post('/weeks/12/items', ['name' => '', 'quantity' => -10])->assertSessionHasErrors(['name', 'quantity']);
    }
}
