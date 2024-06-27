<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    //プレイヤー一覧表示
    public function index(Request $request)
    {
        //ログインセッションチェック
        if (!$request->session()->exists('login')) {
            //ログインにリダイレクト
            return redirect('/');
        }
        //DBのすべての要素入手
        $users = User::all();
        return view('accounts/playerlist', ['accounts' => $users]);
    }
}
