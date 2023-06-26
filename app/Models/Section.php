<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    protected $fillable = [
        'parent_id',
        'caption',
        'url',
        'body'
    ];
    public function publication()
    {
        return $this->hasMany(Publication::class);
    }

}
