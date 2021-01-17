<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesbiblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagesbibles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('img');
            $table->unsignedBigInteger('bibles_id');
            $table->foreign('bibles_id')->references('id')->on('bibles');
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
        Schema::dropIfExists('imagesbibles');
    }
}
