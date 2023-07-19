<?php

namespace App\Http\Components\Layout\Models;

class MenuWidget{
    public array $menu;
    public function __construct($menu)
    {
        $this->menu = $menu;
    }

}