<?php

namespace App\Http\Components\Models;

class Link
{

    public function setItemMenu($name,$link): array
    {
        return array('name'=>$name,'link'=>$link);
    }
}