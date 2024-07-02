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
        //モデル取得
        $user = Have::find(1);

        //関連モデルからデータの取得
        //foreach ($user->items as $item) {
        // echo $user->name;
        // echo $item->name;
        // echo $item->pivot->amount;
        //}
        //テーブル結合してDBから入手
        $haves = Have::join('users', 'haves.id', '=', 'users.id')
            ->join('items', 'haves.id', '=', 'items.id')
            ->select('haves.id', 'users.player_name', 'items.item_name', 'haves.have')
            ->get();

        return view('haves/havelist', ['accounts' => $haves]);
    }

}
