<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{

    //アカウント一覧表示
    public function index(Request $request)
    {
        //ログインセッションチェック
        if (!$request->session()->exists('login')) {
            //ログインにリダイレクト
            return redirect('/');
        }
        //テーブルのすべてのレコードを取得
        $accounts = Account::ALL();
        return view('accounts/index', ['accounts' => $accounts]);
    }


}
