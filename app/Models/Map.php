<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @OA\Schema(
 *     title="Map",
 *     description="содержит контент компонента страницы",
 *     @OA\Xml(
 *         name="Map"
 *     )
 * )
 */
class Map extends Model
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

    /**
     * @OA\Property(
     *     title="text",
     *     description="Текст компонента страницы",
     *     format="string",
     *     example="Текст компонента страницы"
     * )
     */
    private string $text;

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
