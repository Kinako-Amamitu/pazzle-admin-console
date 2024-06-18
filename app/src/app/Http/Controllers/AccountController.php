<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    //アカウント一覧表示
    public function index(Request $request)
    {
        $title = 'アカウント一覧';
        $data = [
            [
                'id' => 1,
                'name' => 'テストさん',
                'password' => '$3$3kdiel2',
            ],
            [
                'id' => 2,
                'name' => 'jobi',
                'password' => '$9ui#2kdil',
            ]
        ];
        return view('accounts/index', ['title' => $title, 'accounts' => $data]);
    }


}
