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
        Schema::create('data_alumnis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('pekerjaan');
            $table->string('Mata Kuliah Pemograman');
            $table->string('Mata Kuliah Manajemen SI/IT');
            $table->string('Mata Kuliah Data dan Informasi');
            $table->string('Mata Kuliah Sistem Informasi');
            $table->string('Mata Kuliah Rekayasa dan Perancangan Sistem Informasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_alumnis');
    }
};
