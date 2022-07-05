<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Categorias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('categorias', function (Blueprint $table) {

            /**
             * $table->engine="InnoDB" genera un accion en cascada, lo que significa que
             * si se elimina una categoria, tambien se eliminaran los libros incluidos en esta.
            */
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->string('nombre');
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
