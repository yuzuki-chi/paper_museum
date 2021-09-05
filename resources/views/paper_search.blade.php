@extends('layouts.pm_basic')

@section('title', '論文検索')

@section('content')
<div>
    ここは論文の検索ページです。<br/>
    @if( isset( $_GET['keyword'] ) )
    検索用語『<?= $_GET['keyword'] ?>』

    @else
    検索用語を入力してください。
    <form action="/paper/search" method="get">
        <input type="text" name="keyword" id="search_text">
        <input type="submit" value="検索">
    </form>
    @endif
</div>
@endsection