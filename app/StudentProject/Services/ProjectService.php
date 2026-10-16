<?php

namespace App\StudentProject\Services;

use App\StudentProject\Models\ProjectItem as ChosenItem;

final class ProjectService
{
    /** @return list<ChosenItem> */
    public function samples(): array
    {
        return [new ChosenItem('Sample A', 'Category 1'), new ChosenItem('Sample B', 'Category 2')];
    }

    /** @return array{name: string, category: string} */
    public function details(ChosenItem $item): array
    {
        return ['name' => $item->getName(), 'category' => $item->getCategory()];
    }
}
