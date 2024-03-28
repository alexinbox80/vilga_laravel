<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'lang_id',
        'charset',
        'meta_title',
        'meta_description',
        'title',
        'contact_phone'
    ];

    protected $with = [
        'lang',
        'menus',
        'banner',
        'advantage',
        'gallery',
        'schema',
        'map',
        'footer'
    ];

    public function lang(): HasOne
    {
        return $this->hasOne(Lang::class, 'id', 'lang_id');
    }

    public function menus(): HasMany
    {
        return $this->hasMany(Menu::class, 'page_id', 'id');
    }

    public function banner(): HasOne
    {
        return $this->hasOne(Banner::class, 'page_id', 'id');
    }

    public function advantage(): HasOne
    {
        return $this->hasOne(Advantage::class, 'page_id', 'id');
    }

    public function gallery(): HasOne
    {
        return $this->hasOne(Gallery::class, 'page_id', 'id');
    }

    public function schema(): HasOne
    {
        return $this->hasOne(Schema::class, 'page_id', 'id');
    }

    public function map(): HasOne
    {
        return $this->hasOne(Map::class, 'page_id', 'id');
    }

    public function footer(): HasOne
    {
        return $this->hasOne(Footer::class, 'page_id', 'id');
    }
}
