<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paper Museum</title>
</head>
<body>

<?php
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
/*
DB::table('papers')->insert([
    'title' => 'サンプル論文',
    'author_id' => 1,
    'submit' => '2021/05/25',
    'paper_type' => 1,
    'belonging_id' => 1,
    'lab_id' => 1,
    'description' => 'これは概要です.'
]);
*/
$users = DB::table('papers')->get();
var_dump($users);
?>
</body>
</html>