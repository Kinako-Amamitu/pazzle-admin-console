<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\NoCacheMiddleware;
use Illuminate\Support\Facades\Route;

Route::middleware(NoCacheMiddleware::class)->group(function () {
    Route::get('users', [UserController::class, 'show'])
        ->name('users.show');

    Route::get('users', [UserController::class, 'index'])
        ->name('users.index');

    Route::post('users/store',
        [UserController::class, 'store'])
        ->name('users/store');


    Route::post('users/update',
        [UserController::class, 'update'])
        ->name('users/update');

    Route::get('item',
        [UserController::class, 'index'])
        ->name('item');
});
