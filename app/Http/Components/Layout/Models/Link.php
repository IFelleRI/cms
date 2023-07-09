<?php

namespace App\Http\Components\Layout\Models;

class Link
{

    public function setItemMenu($name,$link): array
    {
        return array('name'=>$name,'link'=>$link);
    }
}