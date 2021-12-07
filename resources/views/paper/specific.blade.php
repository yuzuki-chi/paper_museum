<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>specific paper</title>
</head>
<body>
<h2>{{$paper->title}}</h2>

@if(!is_null($author))
<h3>{{$author->name_family}} {{$author->name_first}}</h3>
@else
<h3>著者不詳</h3>
@endif

<p>
@if($paper->file_locate == 1)
    <a href='{{$file_entity}}'>
        論文リンクはこちら
    </a>
@else
    論文のリンクが登録されていません。
@endif
</p>

</body>
</html>
