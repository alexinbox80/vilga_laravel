<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'original_name',
        'mime',
        'extension',
        'size',
        'sort',
        'path',
        'description',
        'alt',
        'hash',
        'disk',
        'group'
    ];
}
