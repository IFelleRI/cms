<?php

namespace App\Http\Components\Section\Models;

class Actions
{
    public string $action;
    public string $name;
    public function __construct($name,$action)
    {
        $this->name = $name;
        $this->action = $action;
    }

}