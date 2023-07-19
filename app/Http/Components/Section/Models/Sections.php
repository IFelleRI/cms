<?php

namespace App\Http\Components\Section\Models;

class Sections
{
    public string $caption;
    public function __construct($caption)
    {
        $this->caption = $caption;
    }

}