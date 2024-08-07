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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rol_id')->references('id')->on('roles');
            $table->string('img_perfil')->nullable();
            $table->string('nombre');
            $table->string('apellido')->nullable();
            $table->foreignId('ciudad_id')->references('id')->on('cities')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable(true);
            $table->string('password');
            $table->string('validated_token')->nullable()->unique();
            $table->string('password_reset_token')->nullable()->unique();            
            $table->timestamp('password_reset_expires_at')->nullable()->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
