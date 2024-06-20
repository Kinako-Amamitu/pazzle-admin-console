<?php
header('X-FRAME-OPTIONS:DENY');
?>

    <!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>User List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<div class="container text-center bg-primary-subtle" style="width: 500px">
    <h2 class="display-5">▼ユーザー名▼</h2>
</div>
<ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
    <li><a href="/accounts/playerlist" class="nav-link px-2 ">プレイヤー一覧</a></li>
    <li><a href="/accounts/itemlist" class="nav-link px-2">アイテム一覧</a></li>
    <li><a href="/accounts/havelist" class="nav-link px-2">所持アイテム一覧</a></li>
</ul>

<form method="POST" action="{{url('accounts/logout')}}">
    @csrf
    <div class="col-md-3 text-end">
        <button type="submit" class="btn btn-outline-primary me-2">Logout</button>
        <input type="hidden" name="action" value="logout">
    </div>
</form>
<form method="POST" action="{{url('accounts/index')}}">
    @csrf
    <table class="table table-bordered mx-auto p-2" style="width: 60%">
        <tr>
            <th>アカウント名</th>
            <th>パスワードハッシュ</th>
        </tr>

        @foreach ($accounts as $account)
            <tr>

                <td>{{$account['name']}}</td>
                <td>{{$account['password']}}</td>

            </tr>
        @endforeach

    </table>
</form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>

</body>
</html>
