<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->increments('id');           //Author ID (primary key)
            $table->string('name_famiry');      //Author name (famiry)
            $table->string('name_famiry_kana'); //Author name kana (famiry)
            $table->string('name_first');       //Author name (first)
            $table->string('name_first_kana');  //Aurhor name kana(first)
            $table->string('email')->nullable();    //Author email
            $table->string('homepage')->nullable(); //Author homepage (URL)
            $table->string('phone')->nullable();    //Author phone num
            $table->string('alias_name')->nullable();   //Author alias name
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('authors');
    }
}
