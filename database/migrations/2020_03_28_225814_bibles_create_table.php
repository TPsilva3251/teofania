<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BiblesCreateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bibles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->unsignedBigInteger('categories_id');
            $table->foreign('categories_id')->references('id')->on('categories');
            $table->mediumText('descricao');
            $table->string('traducao');
            $table->string('idioma');
            $table->string('tamanho_da_letra');
            $table->string('capa');
            $table->string('acabamento');
            $table->string('medida');
            $table->string('formato');
            $table->integer('paginas');
            $table->boolean('indice');
            $table->string('indicacao');
            $table->string('isbn');
            $table->string('codigo');
            $table->float('peso');
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
        //
    }
}
