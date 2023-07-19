<?php

namespace App\Http\Components\Section\Models;

class SectionListWidget
{
    public array $sections;
    public array $actions;
    public function __construct($sectionList,$actions)
    {
        $this->sections = $sectionList;
        $this->actions = $actions;
    }

}