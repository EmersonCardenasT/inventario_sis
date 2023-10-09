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
        Schema::create('productos', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('Nombre');
            $table->decimal('PrecioCompra', 10);
            $table->decimal('PrecioVenta', 10);
            $table->integer('idcategoria')->nullable()->index('idcategoria');
            $table->integer('idproveedor')->nullable()->index('idproveedor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
};
