<?php

namespace App\Http\Controllers;

/**
 * @OA\Info(title=" API documentation", version="0.0.1")
 *
 *
 * @OA\Server(
 *     description="Вилга: контент одностраничного сайта",
 *     url="http://api.vilga.ru"
 * )
 * @OA\Server(
 *        url="http://localhost:8080",
 *        description="Вилга: контент одностраничного сайта",
 *   )
 *
 * @OA\SecurityScheme(
 *      type="apiKey",
 *      in="header",
 *      name="X-APP-KEY",
 *      securityScheme="X-APP-KEY"
 * )
 */
abstract class Controller
{
    //
}
