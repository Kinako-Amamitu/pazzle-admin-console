<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //ログインの処理
    public function dologin(Request $request)
    {
        if ($request['name'] === 'jobi' && $request['password'] === 'jobi') {
            return redirect('accounts/index');
        } else {
            return view('accounts/dologin');
        }

    }

    //ログアウトの処理
    public function logout(Request $request)
    {
        return view('accounts/dologin');
    }
}
