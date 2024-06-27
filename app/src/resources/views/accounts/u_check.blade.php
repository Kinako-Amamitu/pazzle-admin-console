<html>
<head>
    <title>Signin</title>
    <link rel="canonical" href="https://getbootstrap.jp/docs/5.3/examples/sign-in/">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="signin.css" rel="stylesheet">
</head>
<body>
<form method="post" action="{{url('accounts/update')}}">
    @csrf
    <h1>パスワード更新：{{$account['name']}}</h1>
    <label for="inputPassword" class="sr-only">新しいパスワード</label>
    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="パスワード" required>
    <button type="submit" class="btn btn-secondary">更新</button>
    <input type="hidden" value="update">
    <input type="hidden" name='id' value={{$account['id']}} >
    <button onclick="location.href='{{route('accounts.index')}}'" type="button" class="btn btn-secondary">
        キャンセル
    </button>
</form>
</body>
</html>
