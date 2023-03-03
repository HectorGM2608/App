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
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('proveedor_id')->unsigned();

            $table->string('Nombre', 100);
            
            $table->string('Motivo', 100);
            $table->string('Direccion', 100);
            $table->timestamps();
            

            $table->foreign('proveedor_id')->references('id')->on('proveedores')->onDelete("cascade");
            
            
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
