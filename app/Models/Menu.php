<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *     title="Menu",
 *     description="содержит меню компонента страницы",
 *     @OA\Xml(
 *         name="Menu"
 *     )
 * )
 */
class Menu extends Model
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
     *     title="name",
     *     description="Заголовок меню страницы",
     *     format="string",
     *     example="Заголовок меню страницы"
     * )
     */
    private string $name;

    /**
     * @OA\Property(
     *     title="href",
     *     description="Ссылка меню страницы",
     *     format="string",
     *     example="#advantages"
     * )
     */
    private string $href;

    protected $fillable = [
        'page_id',
        'name',
        'href'
    ];
}
