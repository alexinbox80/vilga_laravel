<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Advantage extends Model
{
    use HasFactory;

    protected $fillable = [
        'page_id',
        'header'
    ];

    protected $with = [
        'items'
    ];

    public function items(): HasMany
    {
        return $this->hasMany(Item::class, 'advantage_id', 'id');
    }
}
