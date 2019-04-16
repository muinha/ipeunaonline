<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_news', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_news');
            $table->foreign('id_news')->references('id')->on('news')->onDelete('cascade');
            $table->string('image_principal')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('image_news');
    }
}
