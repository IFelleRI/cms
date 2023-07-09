<?php

namespace App\Http\Components\Layout\Models;

class MenuWidget{
    protected mixed $menu;
    public function setMenu(): array
    {
        $menuList = [];
        $this->menu = config('layout.menu');
        $links = new Link();
        foreach ($this->menu as $item){
            $menuList[] = $links->setItemMenu($item['name'],$item['link']);
        }
        return $menuList;
    }
}