<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *     title="Banner",
 *     description="содержит контент компонента страницы",
 *     @OA\Xml(
 *         name="Banner"
 *     )
 * )
 */
class Banner extends Model
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
     *     title="sub_header",
     *     description="Подзаголовок компонента страницы",
     *     format="string",
     *     example="Подзаголовок компонента страницы"
     * )
     */
    private string $sub_header;

    /**
     * @OA\Property(
     *     title="form_title",
     *     description="Заголовок формы компонента страницы",
     *     format="string",
     *     example="Заголовок формы компонента страницы"
     * )
     */
    private string $form_title;

    /**
     * @OA\Property(
     *     title="form_name",
     *     description="Поле имя формы компонента страницы",
     *     format="string",
     *     example="Иван"
     * )
     */
    private string $form_name;

    /**
     * @OA\Property(
     *     title="form_phone",
     *     description="Поле телефон формы компонента страницы",
     *     format="string",
     *     example="7 123 456 6789"
     * )
     */
    private string $form_phone;

    /**
     * @OA\Property(
     *     title="form_button",
     *     description="Текст кнопки формы компонента страницы",
     *     format="string",
     *     example="Отправить"
     * )
     */
    private string $form_button;

    protected $fillable = [
        'page_id',
        'header',
        'sub_header',
        'form_title',
        'form_name',
        'form_phone',
        'form_button'
    ];
}
