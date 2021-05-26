<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paper Museum</title>
</head>
<body>
<pre>
<?php
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

$papers = DB::table('papers')->get();
var_dump($papers);
?>
</pre>
</body>
</html>