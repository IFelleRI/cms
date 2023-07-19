<?php

namespace App\Http\Components\Layout\Models;

class Link
{
    public string $name;
    public string $link;

   public function __construct($name,$link)
   {
        $this->link = $link;
        $this->name = $name;
   }

}