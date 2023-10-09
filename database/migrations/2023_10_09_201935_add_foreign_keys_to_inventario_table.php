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
        Schema::table('inventario', function (Blueprint $table) {
            $table->foreign(['idproducto'], 'inventario_ibfk_1')->references(['id'])->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inventario', function (Blueprint $table) {
            $table->dropForeign('inventario_ibfk_1');
        });
    }
};
