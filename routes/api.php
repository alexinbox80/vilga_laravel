<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\PageController;
use Illuminate\Support\Facades\App;
use App\Models\Lang;

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:sanctum');

Route::prefix('/page')->group(function () {
    Route::apiResource('/{locale}', PageController::class)
        ->only([
            'index',
        ])->names([
            'page.index'
        ]);
});
