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

    public function parent()
    {
        return $this->hasOne(Section::class, 'id', 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Section::class, 'parent_id', 'id');
    }

    public function publication()
    {
        return $this->hasMany(Publication::class);
    }

    public function files()
    {
        return $this->hasMany(File::class);
    }
}
