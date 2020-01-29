<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 45);
            $table->string('documento_identidad', 15);
            $table->enum('genero', ['FEMENINO','MASCULINO'])->default('FEMENINO');
            $table->string('direccion', 45);
            $table->string('email')->unique();
            $table->unsignedInteger('id_idioma');
            $table->timestamps();
            $table->foreign('id_idioma')->references('id')->on('idiomas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guias');
    }
}
