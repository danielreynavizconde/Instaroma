<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordenes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_cliente');
            $table->foreign('id_cliente')->references('id')->on('cliente');
            $table->string('fecha_envio');
            $table->string('fecha_entrega');
            $table->string('sub_total_orden');
            $table->string('impuesto_orden');
            $table->string('total_orden');
            $table->unsignedBigInteger('id_estado_transaccion');
            $table->foreign('id_estado_transaccion')->references('id')->on('estadoTransaccion');
            $table->string('activo');
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
        Schema::dropIfExists('ordenes');
    }
}
