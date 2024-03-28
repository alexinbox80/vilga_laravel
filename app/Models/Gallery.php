<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @OA\Schema(
 *     title="Gallery",
 *     description="содержит контент компонента страницы",
 *     @OA\Xml(
 *         name="Gallery"
 *     )
 * )
 */
class Gallery extends Model
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
     *     title="page_id",
     *     description="Идентификатор страницы",
     *     format="int64",
     *     example=1
     * )
     */
    private int $page_id;

    /**
     * @OA\Property(
     *     title="header",
     *     description="Заголовок компонента страницы",
     *     format="string",
     *     example="Заголовок компонента страницы"
     * )
     */
    private string $header;

    protected $fillable = [
        'page_id',
        'header'
    ];

    protected $with = [
        'images'
    ];

    public function images(): HasMany
    {
        return $this->hasMany(Image::class, 'gallery_id', 'id');
    }
}
