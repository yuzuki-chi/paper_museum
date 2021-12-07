<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>paper list</title>
</head>
<body>
<h3>論文リスト</h3>
<ul>
    @if($papers!==[])
    @foreach($papers as $paper)
        <li>
            <a href='/paper/{{$paper->id}}'>
                {{$paper->title}}
            </a>
        </li>
    @endforeach
    @else
        <li>論文データはありません。</li>
    @endif
</ul>
<p><a href="/paper/new">新規作成</a></p>
</body>
</html>
