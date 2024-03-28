<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\PageController;
use App\Http\Controllers\Api\v1\CallbackController;

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

    Route::apiResource('/callback', CallbackController::class)
        ->only([
            'store',
        ])->names([
            'page.store'
        ]);
});
