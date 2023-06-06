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
        Schema::create('profesor_propuesta', function (Blueprint $table) {
            $table->integer('propuesta_id')->unsigned();
            $table->integer('profesor_id')->unsigned();
            $table->date('fecha');
            $table->time('hora');
            $table->text('comentario');
        
            $table->primary(['user_id', 'stock_id']);
        
            $table->foreign('propuesta_id')->references('id')->on('propuestas')->onUpdate('restrict')->onDelete('cascade');
            $table->foreign('profesor_id')->references('id')->on('profesores')->onUpdate('restrict')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profesor_propuesta');
    }
};
