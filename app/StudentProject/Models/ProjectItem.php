<?php

namespace App\StudentProject\Models;

/** Replace ProjectItem and its two fields with YOUR own topic in Week 11. */
final class ProjectItem
{
    public function __construct(private string $name, private string $category)
    {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCategory(): string
    {
        return $this->category;
    }
}
