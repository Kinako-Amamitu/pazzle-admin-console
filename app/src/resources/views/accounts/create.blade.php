<!doctype html>
<html lang="ja">
<head>
    <title>Signin</title>
    <link rel="canonical" href="https://getbootstrap.jp/docs/5.3/examples/sign-in/">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="signin.css" rel="stylesheet">
</head>
<body class="text-center">
<ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
    <li><a href="/accounts/playerlist" class="nav-link px-2 ">プレイヤー一覧</a></li>
    <li><a href="/accounts/itemlist" class="nav-link px-2">アイテム一覧</a></li>
    <li><a href="/accounts/havelist" class="nav-link px-2">所持アイテム一覧</a></li>
    <li><a href="/accounts" class="nav-link px-2">ユーザー一覧</a></li>
    <li><a href="/accounts/create" class="nav-link px-2">ユーザー登録</a></li>

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
    <h1 class="h3 mb-3 font-weight-normal">アカウント登録</h1>
    <label for="inputEmail" class="sr-only">アカウント名</label>
    <input type="text" id="inputEmail" name="name" class="form-control" placeholder="アカウント名" required autofocus>
    <label for="inputPassword" class="sr-only">パスワード</label>
    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="パスワード" required>
    <div class="checkbox mb-3">
    </div>
    <button class="btn btn-lg btn-primary btn-block" name="login_btn" type="submit">アカウントを登録</button>
    <input type="hidden" name="action" value="doLogin">
    @if($errors=='登録完了！！')
        <p>登録出来ました。</p>
    @endif
    <p class="mt-5 mb-3 text-muted">&copy; 2024</p>
</form>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script>
    window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="/docs/4.3/assets/js/vendor/anchor.min.js"></script>
<script src="/docs/4.3/assets/js/vendor/clipboard.min.js"></script>
<script src="/docs/4.3/assets/js/vendor/bs-custom-file-input.min.js"></script>
<script src="/docs/4.3/assets/js/src/application.js"></script>
<script src="/docs/4.3/assets/js/src/search.js"></script>
<script src="/docs/4.3/assets/js/src/ie-emulation-modes-warning.js"></script>
</body>
</html>
