<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>paper create page</title>
</head>
<body>
@if (Route::has('login'))
    <div>
        @auth
            <a href="{{ url('/dashboard') }}">マイページ</a>
        @else
            <a href="{{ route('login') }}">ログイン</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}">アカウント新規作成</a>
            @endif
        @endauth
    </div>
@endif
<form action="/paper/new" method="post">
    @csrf
    title: <input type="text" name="title"><br/>
    <input type="submit" value="新規作成">
</form>
</body>
</html>
