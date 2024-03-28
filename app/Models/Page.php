<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @OA\Schema(
 *     title="Page",
 *     description="содержит страницу страницы",
 *     @OA\Xml(
 *         name="Page"
 *     )
 * )
 */
class Page extends Model
{
    use HasFactory;

    /**
     * @OA\Property(
     *     title="id",
     *     description="id",
     *     format="int64",
     *     example=1
     * )
     */
    private int $id;

    /**
     * @OA\Property(
     *     title="lang_id",
     *     description="Идентификатор языка страницы",
     *     format="int64",
     *     example=1
     * )
     */
    private int $lang_id;

    /**
     * @OA\Property(
     *     title="charset",
     *     description="Кодировка страницы",
     *     format="string",
     *     example="utf-8"
     * )
     */
    private string $charset;

    /**
     * @OA\Property(
     *     title="meta_title",
     *     description="SEO страницы",
     *     format="string",
     *     example="Meta Title"
     * )
     */
    private string $meta_title;

    /**
     * @OA\Property(
     *     title="meta_description",
     *     description="SEO страницы",
     *     format="string",
     *     example="Meta Description"
     * )
     */
    private string $meta_description;

    /**
     * @OA\Property(
     *     title="title",
     *     description="Заголовок страницы",
     *     format="string",
     *     example="Vilga villag"
     * )
     */
    private string $title;

    /**
     * @OA\Property(
     *     title="contact_phone",
     *     description="Контактный телефон",
     *     format="string",
     *     example="+7 999 123 4567"
     * )
     */
    private string $contact_phone;

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
