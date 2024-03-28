<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Schema extends Model
{
    use HasFactory;

    protected $fillable = [
        'page_id',
        'header'
    ];

    protected $with = [
        'image'
    ];

    public function image(): HasOne
    {
        return $this->hasOne(Image::class, 'schema_id', 'id');
    }
}
