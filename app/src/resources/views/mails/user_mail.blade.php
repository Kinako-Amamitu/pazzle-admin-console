@extends('layouts.app')
@section('title','メール一覧')
@section('h1','▼ユーザー受信メール一覧▼')
@section('body')
    <table class="table table-bordered mx-auto p-2" style="width: 60%">
        <tr>
            <th>ID</th>
            <th>プレイヤー名</th>
            <th>メールID</th>
        </tr>
        @foreach($users as $user)
            @foreach ($user->masters as $master)
                <tr>

                    <td>{{$master['id']}}</td>
                    <td>{{$user->masters->player_name}}</td>
                    <td>{{$master['mail_id']}}</td>

                </tr>
            @endforeach
        @endforeach
    </table>
@endsection
