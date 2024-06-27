<?php

namespace App\Http\Controllers;

use App\Models\Have;
use Illuminate\Http\Request;

class Havelist extends Controller
{
    //アイテム一覧表示
    public function have(Request $request)
    {
        if (!$request->session()->exists('login')) {
            //ログインにリダイレクト
            return redirect('/');
        }
        //テーブル結合してDBから入手
        $haves = Have::join('users', 'haves.id', '=', 'users.id')
            ->join('items', 'haves.id', '=', 'items.id')
            ->select('haves.id', 'users.player_name', 'items.item_name', 'haves.have')
            ->get();

        return view('accounts/havelist', ['accounts' => $haves]);
    }

}
