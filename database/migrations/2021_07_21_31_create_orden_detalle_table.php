<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenDetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordenDetalle', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_orden');
            $table->foreign('id_orden')->references('id')->on('ordenes');
            $table->unsignedBigInteger('id_producto');
            $table->foreign('id_producto')->references('id')->on('producto');
            $table->unsignedBigInteger('precio');
            $table->unsignedBigInteger('cantidad');
            $table->unsignedBigInteger('total');
            $table->timestamps();//created_at update_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordenDetalle');
    }
}
