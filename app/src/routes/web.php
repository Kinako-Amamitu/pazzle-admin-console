<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\Dologin;
use App\Http\Controllers\Havelist;
use App\Http\Controllers\Itemlist;
use App\Http\Controllers\PlayerController;
use Illuminate\Support\Facades\Route;

Route::get('/', [Dologin::class, 'index']);
Route::post('/', [Dologin::class, 'dologin'])->name('login');
Route::post('accounts/logout', [Dologin::class, 'logout']);
Route::get('accounts/index', [AccountController::class, 'index']);
Route::get('accounts/itemlist', [Itemlist::class, 'item']);
Route::get('accounts/playerlist', [PlayerController::class, 'index']);
Route::get('accounts/havelist', [Havelist::class, 'have']);
