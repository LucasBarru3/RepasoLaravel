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
        Schema::create('opinions', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_usuario');
            $table->integer('valoracion');
            $table->string('comentario',255);
            $table->unsignedBigInteger('libro_id')->nullable();
            $table->foreign('libro_id')->references('id')->on('libros')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('opinions');
    }
};
