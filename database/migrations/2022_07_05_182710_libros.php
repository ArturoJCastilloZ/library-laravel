<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Libros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('libros', function (Blueprint $table) {

            /**
             * $table->engine="InnoDB" genera un accion en cascada, lo que significa que
             * si se elimina una categoria, tambien se eliminaran los libros incluidos en esta.
             */
            $table->engine="InnoDB";
            $table->bigIncrements('id');

            /**Es el campo que estara relacionado con la categoria */
            $table->bigInteger('categoria_id')->unsigned();
            $table->string('nombre');

            $table->timestamps();

            /**
             * Aquí se le indica la relación con la tabla Categorias
             * El foreign o Llave foranea es categoria_id, que hace referencia al 'id' de la tavla categorias
             * */
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');
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
