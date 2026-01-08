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
        Schema::create('mobil', function (Blueprint $table) {
            $table->string('id_mobil', 10)->primary(); // 
            $table->string('merek_tipe', 100); // 
            $table->integer('harga'); // 
            $table->integer('tahun'); // 
            $table->integer('jarak_tempuh'); // 
            $table->string('transmisi', 20); // 
            $table->integer('fitur'); // 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mobils');
    }
};
