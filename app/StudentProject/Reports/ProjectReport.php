<?php

namespace App\StudentProject\Reports;

use App\StudentProject\Models\ProjectItem;

final class ProjectReport
{
    public function summarize(ProjectItem $item): string
    {
        return $item->getName().' belongs to '.$item->getCategory().'.';
    }
}
