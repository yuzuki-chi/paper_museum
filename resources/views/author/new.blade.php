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
<form action="/author/new" method="post">
    @csrf
    name_family: <input type="text" name="name_family"><br/>
    name_family_kana: <input type="text" name="name_family_kana">
    name_first: <input type="text" name="name_first"><br/>
    name_first_kana: <input type="text" name="name_first_kana">
    <input type="submit" value="新規作成">
</form>
</body>
</html>
