<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Havelist extends Controller
{
    //アイテム一覧表示
    public function have(Request $request)
    {
        $title = '所持アイテム一覧';
        $data = [
            [
                'id' => 1,
                'pname' => 'jobi',
                'iname' => '回復薬',
                'have' => 10,
            ],
            [
                'id' => 2,
                'pname' => 'kida',
                'iname' => 'パソコン',
                'have' => 1,
            ]
        ];
        return view('accounts/havelist', ['title' => $title, 'havedatas' => $data]);
    }

}
