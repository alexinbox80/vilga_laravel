<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @OA\Schema(
 *     title="Advantage",
 *     description="содержит контент компонента страницы",
 *     @OA\Xml(
 *         name="Advantage"
 *     )
 * )
 */
class Advantage extends Model
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
        'items'
    ];

    public function items(): HasMany
    {
        return $this->hasMany(Item::class, 'advantage_id', 'id');
    }
}
