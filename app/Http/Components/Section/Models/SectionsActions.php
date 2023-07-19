<?php

namespace App\Http\Components\Section\Models;

class SectionsActions
{
    public string $name;
    public string $action;
    public function __construct($name,$action)
    {
        $this->name = $name;
        $this->action = $action;
    }

}