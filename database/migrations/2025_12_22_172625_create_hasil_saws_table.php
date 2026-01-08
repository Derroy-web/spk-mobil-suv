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
        Schema::create('hasil_saw', function (Blueprint $table) {
            $table->id('id_hasil'); // Primary Key (INT) 
            
            // Hubungan ke mobil yang dinilai 
            $table->string('id_mobil', 10); 
            
            // Nilai preferensi akhir (P) dengan presisi 3 angka di belakang koma (DECIMAL 5,3) 
            // Contoh: 0.870 [cite: 154]
            $table->decimal('nilai_preferensi', 5, 3); 
            
            // Urutan peringkat dari yang tertinggi ke terendah 
            $table->integer('peringkat'); 
            
            $table->timestamps();

            // Definisi Relasi
            $table->foreign('id_mobil')->references('id_mobil')->on('mobil')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hasil_saws');
    }
};
