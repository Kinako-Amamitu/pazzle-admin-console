<?php
header('X-FRAME-OPTIONS:DENY');
?>

    <!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>User List</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
@extends('layouts.app')
@section('title','メール一覧')
@section('body')
    <div class="container">
        <header
            class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <div class="col-md-3 mb-2 mb-md-0">
                <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                    <svg class="bi" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>
            </div>


            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="/players/playerlist" class="nav-link px-2 ">プレイヤー一覧</a></li>
                <li><a href="/items/itemlist" class="nav-link px-2">アイテム一覧</a></li>
                <li><a href="/haves/havelist" class="nav-link px-2">所持アイテム一覧</a></li>
                <li><a href="/accounts" class="nav-link px-2">アカウント一覧</a></li>
                <li><a href="/accounts/create" class="nav-link px-2">アカウント登録</a></li>
                <li><a href="/mails" class="nav-link px-2">マスターデータ一覧</a></li>
                <li><a href="/mails/user" class="nav-link px-2">ユーザーメール一覧</a></li>

                <form method="POST" action="{{url('accounts/logout')}}">
                    @csrf
                    <div class="col-md-3 text-end">
                        <button type="submit" class="btn btn-outline-primary me-2">Logout</button>
                        <input type="hidden" name="action" value="logout">
                    </div>
                </form>
            </ul>
        </header>
    </div>
    <div class="container text-center bg-primary-subtle" style="width: 500px">
        <h2 class="display-5">▼ メール一覧 ▼</h2>
    </div>

    <table class="table table-bordered mx-auto p-2" style="width: 60%">
        <tr>
            <th>ID</th>
            <th>プレイヤー名</th>
            <th>本文</th>
        </tr>
        @foreach ($accounts as $account)
            <tr>

                <td>{{$account['id']}}</td>
                <td>{{$account['player_name']}}</td>
                <td>{{$account['mail_id']}}</td>

            </tr>
        @endforeach
    </table>

    <form method="get" action="{{route('mails.send')}}">
        @csrf
        <button type="submit" class="btn btn-secondary">メールを送信する</button>
        <input type="hidden" value="delete">
    </form>

    <script src="/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
            crossorigin="anonymous"></script>
@endsection
</body>
</html>
