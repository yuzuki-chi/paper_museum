@extends('layouts.pm_basic')

@section('title', '論文ページ')

@section('content')
<div>
    ここは論文のリストページです。
    <style>
    table td {
        word-break : break-all;
    }
    </style>
    <table border="1" style="width:100%;">
        <tr>
            <th>タイトル</th>
            <th>提出日</th>
            <th>論文カテゴリ</th>
            <th>所属ID</th>
            <th>研究室ID</th>
            <th>論文リンク</th>
            <th>概要</th>
        </tr>
        @foreach ($papers as $paper)
        <tr>
            <td><?= $paper->title ?></td>
            <td><?= $paper->submit ?></td>
            <td><?= $paper->paper_type ?></td>
            <td><?= $paper->belonging_id ?></td>
            <td><?= $paper->lab_id ?></td>
            <td><?= $paper->url ?></td>
            <td><?= $paper->description ?></td>
        </tr>
        @endforeach
    </table>
</div>
@endsection