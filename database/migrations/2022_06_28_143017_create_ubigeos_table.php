<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUbigeosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ubigeos', function (Blueprint $table) {
            $table->id();
            $table->string('cod_ubigeo');
            $table->string('departamento_ubigeo');
            $table->string('provincia_ubigeo');
            $table->string('distrito_ubigeo');
            $table->foreignId('id_odpe')
                ->nullable()
                ->constrained('odpes')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->timestamps();// created_at update_at
        });;
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ubigeos');
    }
}
