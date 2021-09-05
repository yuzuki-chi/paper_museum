@extends('layouts.pm_basic')

@section('title', 'トップページ')

@section('content')
<div>
    ここはトップページです.
</div>
<div>
    <ul>
        <li><a href="./register">ユーザアカウント新規作成</a></li>
        <li><a href="./login">ユーザアカウントログイン</a></li>
        <li><a href="./paper/list">論文リスト</a></li>
        <li><a href="./paper/new">論文新規登録</a></li>
        <li><a href="./paper/search">論文検索</a></li>
    </ul>
</div>
@endsection