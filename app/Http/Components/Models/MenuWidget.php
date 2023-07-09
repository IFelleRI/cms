<?php

namespace App\Http\Components\Models;
use App\Http\Components\Models\Link;

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