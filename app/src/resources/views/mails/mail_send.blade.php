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
<body>
@extends('layouts.app')
@section('title','メール送信')
@section('body')

    <div class="container text-center bg-primary-subtle" style="width: 500px">
        <h2 class="display-5">▼ メール送信 ▼</h2>
    </div>
    <form class="form-signin" method="POST" action="{{route('mails.register')}}">
        @csrf

        <label for="inputText" class="sr-only">本文</label>
        <input type="text" id="inputText" name="Text" class="form-control" placeholder="本文"
               required>
        <label for="input_item" class="sr-only">アイテム</label>
        <input type="text" id="input_item" name="subject_line" class="form-control" placeholder="アイテム"
               required
               autofocus>
        <div class="checkbox mb-3">
        </div>
        <button class="btn btn-lg btn-primary btn-block" name="login_btn" type="submit">メールを送信</button>
        <input type="hidden" name="action" value="doLogin">
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
        <p class="mt-5 mb-3 text-muted">&copy; 2024</p>
    </form>
@endsection
</body>
</head>
</html>
