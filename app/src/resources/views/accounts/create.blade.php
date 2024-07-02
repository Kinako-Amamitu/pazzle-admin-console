<!doctype html>
<html lang="ja">
<head>
    <title>Signin</title>
    <link rel="canonical" href="https://getbootstrap.jp/docs/5.3/examples/sign-in/">
    <link href="/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="signin.css" rel="stylesheet">
</head>
<body class="text-center">
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
<form class="form-signin" method="POST" action="{{url('accounts/store')}}">
    @csrf
    <div class="container text-center bg-primary-subtle" style="width: 500px">
        <h2 class="display-5">▼アカウント登録▼</h2>
    </div>
    <label for="inputEmail" class="sr-only">アカウント名</label>
    <input type="text" id="inputEmail" name="name" class="form-control" placeholder="アカウント名" required autofocus>
    <label for="inputPassword" class="sr-only">パスワード</label>
    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="パスワード" required>
    <label for="inputPassword" class="sr-only">再入力</label>
    <input type="password" id="inputPassword_confirmation" name="password_confirmation" class="form-control"
           placeholder="パスワードの再入力" required>
    <div class="checkbox mb-3">
    </div>
    <button class="btn btn-lg btn-primary btn-block" name="login_btn" type="submit">アカウントを登録</button>
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script>
    window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')
</script>
<script src="/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
<script src="/docs/4.3/assets/js/vendor/anchor.min.js"></script>
<script src="/docs/4.3/assets/js/vendor/clipboard.min.js"></script>
<script src="/docs/4.3/assets/js/vendor/bs-custom-file-input.min.js"></script>
<script src="/docs/4.3/assets/js/src/application.js"></script>
<script src="/docs/4.3/assets/js/src/search.js"></script>
<script src="/docs/4.3/assets/js/src/ie-emulation-modes-warning.js"></script>
</body>
</html>
