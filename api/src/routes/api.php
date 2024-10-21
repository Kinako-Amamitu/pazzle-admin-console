<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\RankingController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\NoCacheMiddleware;
use Illuminate\Support\Facades\Route;

Route::middleware(NoCacheMiddleware::class)->group(function () {
    Route::get('users/{user_id}', [UserController::class, 'show'])
        ->middleware('auth:sanctum')  //ユーザー認証
        ->name('users.show');

    Route::get('users', [UserController::class, 'index'])
        ->middleware('auth:sanctum')  //ユーザー認証
        ->name('users.index');

    Route::post('users/store',
        [UserController::class, 'store'])
        ->name('users/store');

    Route::post('users/createToken',
        [UserController::class, 'createToken'])
        ->name('users.createToken');

    Route::post('users/update',
        [UserController::class, 'update'])
        ->middleware('auth:sanctum')  //ユーザー認証
        ->name('users/update');


});

Route::get('item',
    [ItemController::class, 'index'])
    ->name('item');

Route::get('ranking/index/{stage_id}', [RankingController::class, 'index'])
    ->name('ranking/index');

Route::post('ranking/store', [RankingController::class, 'store'])
    ->middleware('auth:sanctum')  //ユーザー認証
    ->name('ranking/store');

