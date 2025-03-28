<?php
// filepath: database/migrations/xxxx_xx_xx_xxxxxx_create_genders_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('genders', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->unique();
            $table->timestamps();  
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('genders');
    }
};