<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>author list</title>
</head>
<body>
<h3>著者リスト</h3>
<ul>
    @foreach($authors as $author)
        <li>{{$author->name_family}} {{$author->name_first}} さん</li>
    @endforeach
</ul>
<p><a href="/author/new">新規作成</a></p>
</body>
</html>
