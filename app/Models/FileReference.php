<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileReference extends Model
{
    use HasFactory;

    public $fillable = [
        'file_id',
        'model_id',
        'model_name',
        'type',
        'sort_index'
    ];
    public function file()
    {
        return $this->belongsTo(File::class);
    }
}
