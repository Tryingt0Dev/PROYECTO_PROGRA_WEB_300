<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profesor_propuestas', function (Blueprint $table) {
            $table->integer('propuesta_id')->unsigned();
            $table->integer('profesor_id')->unsigned();
            $table->date('fecha');
            $table->time('hora');
            $table->text('comentario');
            $table->primary(['propuesta_id', 'profesor_id']);
            //FK
            $table->foreign('propuesta_id')->references('id')
                ->on('propuestas');
            $table->foreign('profesor_id')->references('id')
                ->on('profesores');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profesor_propuestas');
    }
};
