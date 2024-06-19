<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Dologin extends Controller
{
    public function index(Request $request)
    {
        return view('accounts/dologin');
    }

    //ログインの処理
    public function dologin(Request $request)
    {
        $request->session()->put('login', true);
        //条件を指定して入手
        $accounts = Account::where('name', '=', $request['name'])->get();
        //$validated = $request->validate([
        //  'name' => ['required', 'min:4', 'max:20'],
        //'password' => ['required']
        //]);
        if (Hash::check($request['password'], $accounts[0]['password'])) {
            return redirect('accounts/index');
        } else {
            return redirect()->route('login', ['error' => 'invalid']);
        }

    }

    //ログアウト処理
    public function logout(Request $request)
    {
        $request->session()->forget('login');
        return redirect('/');
    }
}
