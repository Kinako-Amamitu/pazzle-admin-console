<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\Dologin;
use App\Http\Controllers\Havelist;
use App\Http\Controllers\Itemlist;
use App\Http\Controllers\PlayerController;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Middleware\NoCacheMiddleware;
use Illuminate\Support\Facades\Route;

Route::middleware(NoCacheMiddleware::class)->group(function () {
//ここにルート設定を入れる
    Route::get('/', [Dologin::class, 'index']);
    Route::post('/', [Dologin::class, 'dologin'])->name('login');
    Route::post('accounts/logout', [Dologin::class, 'logout']);
    Route::get('accounts/itemlist', [Itemlist::class, 'item']);
    Route::get('accounts/playerlist', [PlayerController::class, 'index']);
    Route::get('accounts/havelist', [Havelist::class, 'have']);

    Route::prefix('accounts')->name('accounts.')->controller(AccountController::class)
        ->middleware(AuthMiddleware::class)->group(function () {
            Route::get('/', 'index')->name('index');        //accounts.index 一覧表示
            Route::get('create', 'create')->name('create'); //accounts.create 登録画面
            Route::post('store', 'store')->name('store');   //accounts.store 登録処理
            Route::post('d_check', 'd_check')->name('d_check'); //accounts.d_check 削除確認
            Route::post('delete', 'delete')->name('delete');   //accounts.delete 削除処理
            Route::get('u_check', 'u_check')->name('u_check'); //accounts.u_check 更新確認
            Route::post('update', 'update')->name('update');   //accounts.update 更新処理
            Route::post('cancel', 'cancel')->name('cancel');   //accounts.cancel キャンセル処理
            Route::post('update_end', 'update_end')->name('update_end');   //accounts.update_end更新完了処理
        });
});
