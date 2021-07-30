@extends('layouts.app')

@section('title', '論文検索')

@section('content')
<div>
    ここは論文の検索ページです。<br/>
    @if( isset( $_GET['keyword'] ) )
    検索用語『<?= $_GET['keyword'] ?>』

    @else
    検索用語を入力してください。
    @endif
</div>
@endsection