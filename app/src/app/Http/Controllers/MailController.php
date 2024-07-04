<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Mail;
use App\Models\Master;
use App\Models\User;
use App\Models\User_mail;
use DebugBar\DebugBar;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

class MailController extends Controller
{
    //マスターデータの取得
    public function index(Request $request)
    {

        //モデル取得
        $mails = Master::join('items', 'masters.item_id', '=', 'items.id')
            ->select('Text', 'item_name', 'masters.id')->get();

        return view('mails.master_data', ['mails' => $mails]);
    }

    //ユーザーデータの取得
    public function user(Request $request)
    {

        $user = Master::all();
        return view('mails.user_mail', ['users' => $user]);
    }

    //メール送信画面
    public function send(Request $request)
    {

        return view('mails.mail_send');
    }

    //メール送信処理
    public function resister(Request $request)
    {
        User_mail::create([
            ['mail_id' => $request['mail_id']],
            ['item_id' => $request['item_id']]
        ]);
        return redirect()->route('mails.index');
    }
}
