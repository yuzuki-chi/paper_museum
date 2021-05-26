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
            $table->increments('id');   //Paper ID (primary key)
            $table->string('title');    //Paper title
            $table->date('submit')->nullable();     //Submit day
            $table->integer('paper_type');  //Paper Type
            $table->integer('belonging_id')->nullable();    //Belonging ID
            $table->integer('lab_id')->nullable();      //Laboratory ID
            $table->string('url')->nullable();
            $table->string('description')->nullable();  //Description of Paper
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
