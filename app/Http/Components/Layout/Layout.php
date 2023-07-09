<?php

namespace App\Http\Components\Layout;
use App\Http\Components\Models\MenuWidget;

class Layout
{
    public function getMenu(): array
    {
        $menu = new MenuWidget();
        return $menu->setMenu();
    }

}