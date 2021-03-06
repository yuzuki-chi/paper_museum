@extends('layouts.pm_basic')

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

        ファイル選択：
        <input type="file" name="make_file" id="make_file"><br>

        <button id="make_submit">新規作成</button>

        <script>
            const makeBtn = document.getElementById('make_submit');

            makeBtn.addEventListener('click', function () {
                alert('clicked!');
                const xhr= new XMLHttpRequest();
                xhr.onload=function () {
                    alert(xhr.responseText);
                }
                xhr.open('POST', '/api/papers/', true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                const values = {
                    title : document.getElementById('make_title').value,
                    submit : document.getElementById('make_submitday').value,
                    paper_type : document.getElementById('make_type').value,
                    belonging_id : document.getElementById('make_belonging').value,
                    lab_id : document.getElementById('make_lab').value,
                    description : document.getElementById('make_description').value
                };
                xhr.send(JSON.stringify(values));
                console.log(JSON.stringify(values));
            });
        </script>
    </div>
</div>
@endsection