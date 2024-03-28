<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *     title="Lang",
 *     description="содержит язык страницы",
 *     @OA\Xml(
 *         name="Lang"
 *     )
 * )
 */
class Lang extends Model
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
     *     title="language",
     *     description="Язык страницы",
     *     format="string",
     *     example="Язык страницы"
     * )
     */
    private string $language;

    protected $fillable = [
        'language'
    ];
}
