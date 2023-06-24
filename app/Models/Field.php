<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    use HasFactory;

    public $fillable = [
        'parent_id',
        'name',
        'label_value',
        'body_value',
        'sort_index'
    ];
    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
