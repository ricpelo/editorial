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
        Schema::create('articulo_monografia', function (Blueprint $table) {
            $table->foreignId('articulo_id')->constrained('articulos');
            $table->foreignId('monografia_id')->constrained('monografias');
            $table->primary(['articulo_id', 'monografia_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articulo_monografia');
    }
};
