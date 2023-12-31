<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;
    public $fillable = [
        'name',
        'hash',
        'ext',
        'type',
        'size',
        'status'
    ];
    public function FileReference()
    {
        return $this->hasOne(FileReference::class);
    }
}
