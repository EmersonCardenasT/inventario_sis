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
        Schema::table('productos', function (Blueprint $table) {
            $table->foreign(['idcategoria'], 'productos_ibfk_1')->references(['id'])->on('categorias');
            $table->foreign(['idproveedor'], 'productos_ibfk_2')->references(['id'])->on('proveedor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('productos', function (Blueprint $table) {
            $table->dropForeign('productos_ibfk_1');
            $table->dropForeign('productos_ibfk_2');
        });
    }
};
