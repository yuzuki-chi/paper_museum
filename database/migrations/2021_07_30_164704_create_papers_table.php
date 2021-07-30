<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePapersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('papers', function (Blueprint $table) {
            $table->id();
            $table->string('title');            //論文タイトル
            $table->date('submit');             //提出日
            $table->integer('paper_type');      //論文カテゴリ
            $table->integer('belonging_id');    //所属ID (施設名)
            $table->integer('lab_id');          //研究室ID
            $table->string('url');              //論文リンク
            $table->longText('description');      //概要・説明 (longTextの最大長は 4294967295 (2^32 - 1) 文字)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('papers');
    }
}
