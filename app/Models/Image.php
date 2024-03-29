<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *     title="Image",
 *     description="содержит изображения страницы",
 *     @OA\Xml(
 *         name="Image"
 *     )
 * )
 */
class Image extends Model
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
     *     title="gallery_id",
     *     description="Идентификатор компонента галерея",
     *     format="int64",
     *     example=1
     * )
     */
    private int $gallery_id;

    /**
     * @OA\Property(
     *     title="schema_id",
     *     description="Идентификатор компонента схема",
     *     format="int64",
     *     example=1
     * )
     */
    private int $schema_id;

    /**
     * @OA\Property(
     *     title="map_id",
     *     description="Идентификатор компонента карта",
     *     format="int64",
     *     example=1
     * )
     */
    private int $map_id;

    /**
     * @OA\Property(
     *     title="name",
     *     description="Имя файла",
     *     format="string",
     *     example="849dba0b61836342bc6b733dc96e452d8913a864"
     * )
     */
    private string $name;

    /**
     * @OA\Property(
     *     title="name",
     *     description="Имя файла во время загрузки",
     *     format="string",
     *     example="pic1"
     * )
     */
    private string $original_name;

    /**
     * @OA\Property(
     *     title="mime",
     *     description="Майм тип файла",
     *     format="string",
     *     example="application/octet-stream"
     * )
     */
    private string $mime;

    /**
     * @OA\Property(
     *     title="extension",
     *     description="Расширение файла",
     *     format="string",
     *     example="jpg"
     * )
     */
    private string $extension;

    /**
     * @OA\Property(
     *     title="size",
     *     description="Размер файла байт",
     *     format="int",
     *     example="678"
     * )
     */
    private int $size;

    /**
     * @OA\Property(
     *     title="path",
     *     description="путь к файлу",
     *     format="string",
     *     example="YYYY/MM/DD/"
     * )
     */
    private string $path;

    /**
     * @OA\Property(
     *     title="description",
     *     description="Описание",
     *     format="string",
     *     example="Это нужный файл"
     * )
     */
    private string $description;

    /**
     * @OA\Property(
     *     title="alt",
     *     description="Альтернативное описание для картинки",
     *     format="string",
     *     example="Это фото скафандра с выставки космонавтики"
     * )
     */
    private string $alt;

    /**
     * @OA\Property(
     *     title="sort",
     *     description="Флаг сортировки",
     *     format="int",
     *     example="1"
     * )
     */
    private int $sort;

    /**
     * @OA\Property(
     *     title="hash",
     *     description="Хэш файла",
     *     format="string",
     *     example="b9b618da630c76625061de6893f27703131e125c"
     * )
     */
    private string $hash;

    /**
     * @OA\Property(
     *     title="disk",
     *     description="Хранилище файла",
     *     format="string",
     *     example="s3"
     * )
     */
    private string $disk;

    /**
     * @OA\Property(
     *     title="group",
     *     description="Группа файла",
     *     format="string",
     *     example="slider"
     * )
     */
    private string $group;

    protected $fillable = [
        'gallery_id',
        'schema_id',
        'map_id',
        'name',
        'original_name',
        'mime',
        'extension',
        'size',
        'sort',
        'path',
        'description',
        'alt',
        'hash',
        'disk',
        'group'
    ];

    protected $appends = [
        'url'
    ];

    public function getUrlAttribute(?string $default = null): ?string
    {
        $resource = config('filesystems.disks.public.url') . '/';

        return $resource . $this->physicalPath();
    }

    public function physicalPath(): ?string
    {
        if ($this->getAttribute('path') === null || $this->getAttribute('name') === null) {
            return null;
        }

        return $this->getAttribute('path') . $this->getAttribute('name') . '.' . $this->getAttribute('extension');
    }
}
