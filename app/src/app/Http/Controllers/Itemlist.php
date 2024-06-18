<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Itemlist extends Controller
{
    //アイテム一覧表示
    public function item(Request $request)
    {
        $title = 'アイテム一覧';
        $data = [
            [
                'id' => 1,
                'name' => '回復薬',
                'lot' => '消耗品',
                'get' => 100,
                'explanation' => '体力を回復する'
            ],
            [
                'id' => 2,
                'name' => 'パソコン',
                'lot' => '貴重品',
                'get' => 50000,
                'explanation' => 'プログラミングの必需品'
            ]
        ];
        return view('accounts/itemlist', ['title' => $title, 'itemdatas' => $data]);
    }

}
