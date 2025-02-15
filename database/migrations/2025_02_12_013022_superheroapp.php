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
        Schema::create('universo', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->unique();
            $table->timestamps();
        });

        Schema::create('genero', function (Blueprint $table) {
            $table->id();
            $table->enum('name', ['Female', 'Masculine'])->unique();
            $table->timestamps();
        });

        Schema::create('superhero', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->unique();
            $table->string('real_name', 100);
            $table->enum('gender', ['Female', 'Masculine']);
            $table->foreignId('universo_id')->constrained('universo')->onDelete('cascade');
            $table->string('picture')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('superhero');
        Schema::dropIfExists('genero');
        Schema::dropIfExists('universo');
    }
};