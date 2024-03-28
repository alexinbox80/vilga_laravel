<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *     title="Item",
 *     description="содержит карточку коипонента страницы",
 *     @OA\Xml(
 *         name="Item"
 *     )
 * )
 */
class Item extends Model
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
     *     title="advantage_id",
     *     description="Идентификатор компонента",
     *     format="int64",
     *     example=1
     * )
     */
    private int $advantage_id;

    /**
     * @OA\Property(
     *     title="title",
     *     description="Заголовок компонента страницы",
     *     format="string",
     *     example="Заголовок компонента страницы"
     * )
     */
    private string $title;

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
        'advantage_id',
        'title',
        'text'
    ];
}
