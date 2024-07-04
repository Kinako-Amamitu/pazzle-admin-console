@extends('layouts.app')
@section('title','メール送信')
@section('h1','▼メール送信▼')
@section('body')
    <form class="form-signin" method="POST" action="{{route('mails.register')}}">
        @csrf

        <label for="inputText" class="sr-only">本文</label>
        <input type="text" id="inputText" name="Text" class="form-control" placeholder="本文"
               required>
        <label for="input_mail_id" class="sr-only">メールID</label>
        <input type="text" id="input_mail_id" name="mail_id" class="form-control" placeholder="メールID"
               required>
        <label for="input_item" class="sr-only">アイテム</label>
        <input type="text" id="input_item" name="item_id" class="form-control" placeholder="アイテム"
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
