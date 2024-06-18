<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayerController extends Controller
{
    //プレイヤー一覧表示
    public function index(Request $request)
    {
        $title = 'プレイヤー一覧';
        $data = [
            [
                'id' => 1,
                'name' => 'jobi',
                'level' => 10,
                'exp' => 100,
                'hp' => 50
            ],
            [
                'id' => 2,
                'name' => 'kida',
                'level' => '35',
                'exp' => 3000,
                'hp' => 140
            ]
        ];
        return view('accounts/playerlist', ['title' => $title, 'playerdatas' => $data]);
    }
}
