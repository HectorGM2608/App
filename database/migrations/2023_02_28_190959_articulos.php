<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('articulos', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            
            $table->bigInteger('almacen_id')->unsigned();

            $table->string('Nombre', 100);
            
            $table->string('Descripcion', 100);
            $table->integer('Codigo');
            $table->string('Imagen', 100);
            $table->timestamps();

            $table->foreign('almacen_id')->references('id')->on('almacenes')->onDelete("cascade");
            
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
};
