<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('imagen')->nullable();
            $table->string('titulo_libro');
            $table->mediumText('descripcion');
            $table->text('contenido');
            $table->date('fecha_publicacion')->nullable();
            //$table->unsignedBigInteger('categoria_id'); // Relación con categorias
            $table->foreignId('categoria_id')->references('id')->on('categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
