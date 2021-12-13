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
            $table->timestamps();
            $table->string('title');
            $table->timestamp('submit')->nullable();
            $table->integer('author_id')->nullable();
            $table->string('url')->nullable();
            $table->integer('file_locate')->default(0); //0:nil 1:local 2:external
            $table->text('description')->nullable(); //65,535/4byte= 16,384 type
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
