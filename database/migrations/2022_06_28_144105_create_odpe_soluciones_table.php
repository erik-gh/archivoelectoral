<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOdpeSolucionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('odpe_soluciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_odpe')
                ->nullable()
                ->constrained('odpes')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->foreignId('id_solucion')
                ->nullable()
                ->constrained('soluciones')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('odpe_soluciones');
    }
}
