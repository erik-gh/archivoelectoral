<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcesoOdpesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proceso_odpes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_proceso')
                ->nullable()
                ->constrained('procesos')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->foreignId('id_odpe')
                ->nullable()
                ->constrained('odpes')
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
        Schema::dropIfExists('proceso_odpes');
    }
}
