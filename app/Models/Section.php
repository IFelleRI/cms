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

    public function getParent()
    {
        return $this->hasMany(Section::class, 'id', 'parent_id');
    }

    public function getChildren()
    {
        return $this->hasMany(Section::class, 'parent_id');
    }

    public function getPublication()
    {
        return $this->hasMany(Publication::class);
    }

    public function getFiles()
    {
        return $this->hasMany(File::class);
    }
}
