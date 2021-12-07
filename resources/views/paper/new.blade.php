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
<form action="/paper/new" method="post">
    @csrf
    title: <input type="text" name="title"><br/>
    author_id: <input type="text" name="author_id">(いずれは名前->サジェスト機能->格納の機構を再現 )<br/>
    <input type="submit" value="新規作成">
</form>
</body>
</html>
