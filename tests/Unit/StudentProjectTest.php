<?php

namespace Tests\Unit;

use App\StudentProject\Reports\ProjectReport;
use App\StudentProject\Services\ProjectService;
use PHPUnit\Framework\TestCase;

class StudentProjectTest extends TestCase
{
    public function test_two_different_objects_can_be_reported(): void
    {
        $service = new ProjectService();
        $items = $service->samples();
        $this->assertCount(2, $items);
        $this->assertNotSame($items[0]->getName(), $items[1]->getName());
        $this->assertNotEmpty((new ProjectReport())->summarize($items[0]));
    }
}
