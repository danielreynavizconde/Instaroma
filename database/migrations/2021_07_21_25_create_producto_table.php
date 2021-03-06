<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->id();
            $table->string('sku');
            $table->string('nombre');
            $table->string('slug');
            $table->text('descripcion');
            $table->string('precio_actual');
            $table->string('precio_anterior');
            $table->unsignedBigInteger('categoria_id')->nullable();
            $table->foreign('categoria_id')
                ->references('id')
                ->on('categoria')
                ->onDelete('set null');
            $table->string('imagen');
            $table->string('iva');
            $table->string('stock')->nullable();
            $table->string('filtro')->nullable();
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
        Schema::dropIfExists('producto');
    }
}
