@extends('layouts.app')

@section('title', '論文の登録')

@section('content')
<div>
    ここは論文を新規登録するページです。
    <div>
        タイトル：
        <input type="text" name="make_title" id="make_title"><br>

        論文の提出日：
        <input type="text" name="make_submitday" id="make_submitday"><br>

        論文カテゴリ：
        <input type="text" name="make_type" id="make_type"><br>

        所属ID：
        <input type="text" name="make_belonging" id="make_belonging"><br>

        研究室ID：
        <input type="text" name="make_lab" id="make_lab"><br>

        論文の概要：
        <textarea name="make_description" id="make_description" cols="30" rows="10">4294967295文字まで</textarea><br>

        <button id="make_submit">新規作成</button>

        <script>
            const makeBtn = document.getElementById('make_submit');

            makeBtn.addEventListener('click', function () {
                alert('clicked!');
                const xhr= new XMLHttpRequest();
                xhr.onload=function () {
                    alert(xhr.responseText);
                }
                xhr.open('POST', '/', true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.send("text="+document.getElementById('make_title').value);
            });
        </script>
    </div>
</div>
@endsection