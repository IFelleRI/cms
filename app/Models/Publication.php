<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;
    protected $table = 'publications';
    public $fillable = [
        'section_id',
        'caption',
        'date',
        'annotation',
        'body'
    ];
    public function getSection()
    {
        return $this->belongsTo(Section::class);
    }

    public function getFiles()
    {
        return $this->belongsTo(File::class);
    }
}
