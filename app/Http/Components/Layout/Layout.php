<?php

namespace App\Http\Components\Layout;
use App\Http\Components\Layout\Models\Link;
use App\Http\Components\Layout\Models\MenuWidget;

class Layout
{
    public array $links;
    public function getMenu(): MenuWidget
    {
        $menu = config('layout.menu');
        foreach ($menu as $item){
            if(!isset($item['parent_id'])){
                $this->links[$item['id']] = new Link($item['name'],$item['link']);
            }else{
                $this->links[$item['parent_id']]->items[] = new Link($item['name'],$item['link']);
            }
        }
        return new MenuWidget($this->links);
    }
}