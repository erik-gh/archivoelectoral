<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSobreMesasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sobre_mesas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_sobre')
                ->nullable()
                ->constrained('sobres')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->foreignId('id_mesa')
                ->nullable()
                ->constrained('mesas')
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
        Schema::dropIfExists('sobre_mesas');
    }
}
