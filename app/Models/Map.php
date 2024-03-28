<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Map extends Model
{
    use HasFactory;

    protected $fillable = [
        'page_id',
        'header',
        'text'
    ];

    protected $with = [
        'image'
    ];

    public function image(): HasOne
    {
        return $this->hasOne(Image::class, 'map_id', 'id');
    }
}
