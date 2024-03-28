<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *     title="Callback",
 *     description="содержит заказы обратных звонков",
 *     @OA\Xml(
 *         name="Callback"
 *     )
 * )
 */
class Callback extends Model
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
     *     title="name",
     *     description="Имя пользователя",
     *     format="string",
     *     example="Иван"
     * )
     */
    private string $name;

    /**
     * @OA\Property(
     *     title="phone",
     *     description="Телефон для обратной связи",
     *     format="string",
     *     example="89992345678"
     * )
     */
    private string $phone;

    protected $fillable = [
        'name',
        'phone'
    ];
}
