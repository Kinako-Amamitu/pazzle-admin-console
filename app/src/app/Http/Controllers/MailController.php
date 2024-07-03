<?php

namespace App\Http\Controllers;

use App\Models\Mail;
use App\Models\Master;
use App\Models\User;
use App\Models\User_mail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    //マスターデータの取得
    public function index(Request $request)
    {

        //DBから入手
        $mails = Master::all();

        return view('mails.master_data', ['accounts' => $mails]);
    }

    //ユーザーデータの取得
    public function user(Request $request)
    {

        //DBから入手
        $users = User_mail::all();

        return view('mails.user_mail', ['accounts' => $users]);
    }

    //メール送信画面
    public function send(Request $request)
    {

        return view('mails.mail_send');
    }

    //メール送信処理
    public function resister(Request $request)
    {
        $users = User::all();
        foreach ($users as $user) {
            User_mail::create(['id' => $user, 'item' => $request['item'], 'Text' => $request['Text']]);
        }
        return redirect()->route('mails.index');
    }
}
