<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolucionDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solucion_documentos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_solucion')
                ->nullable()
                ->constrained('soluciones')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->foreignId('id_documento')
                ->nullable()
                ->constrained('documentos')
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
        Schema::dropIfExists('solucion_documentos');
    }
}
