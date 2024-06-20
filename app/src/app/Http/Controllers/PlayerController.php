<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    //プレイヤー一覧表示
    public function index(Request $request)
    {
        if (!$request->session()->exists('login')) {
            //ログインにリダイレクト
            return redirect('/');
        }
        //DBのすべての要素入手
        $players = Player::all();
        return view('accounts/playerlist', ['accounts' => $players]);
    }
}
