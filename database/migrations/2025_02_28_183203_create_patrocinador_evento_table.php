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
        Schema::create('patrocinador_evento', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('evento_id');  
            $table->unsignedBigInteger('patrocinador_id');  
            $table->integer('cantidad_invitados');  
           
            $table->foreign('evento_id')->references('id')->on('eventos')->onDelete('cascade');
            $table->foreign('patrocinador_id')->references('id')->on('patrocinadores')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patrocinador_evento');
    }
};
