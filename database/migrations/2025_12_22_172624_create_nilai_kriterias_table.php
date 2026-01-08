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
        Schema::create('nilai_kriteria', function (Blueprint $table) {
            $table->id('id_nilai'); // Primary Key (INT) 
            
            // Foreign Key ke tabel mobil (id_mobil menggunakan VARCHAR 10) 
            $table->string('id_mobil', 10); 
            
            // Foreign Key ke tabel kriteria (id_kriteria menggunakan VARCHAR 5) 
            $table->string('id_kriteria', 5); 
            
            // Nilai spesifik untuk kriteria tersebut (DECIMAL 10,2) 
            $table->decimal('nilai', 10, 2); 
            
            $table->timestamps();

            // Definisi Relasi (Foreign Key Constraints)
            $table->foreign('id_mobil')->references('id_mobil')->on('mobil')->onDelete('cascade');
            $table->foreign('id_kriteria')->references('id_kriteria')->on('kriteria')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai_kriterias');
    }
};
