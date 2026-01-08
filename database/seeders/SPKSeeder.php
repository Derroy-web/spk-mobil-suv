<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SPKSeeder extends Seeder
{
    public function run()
    {
        // 1. Seed Data Kriteria 
        DB::table('kriteria')->insert([
            ['id_kriteria' => 'C1', 'nama_kriteria' => 'Harga', 'bobot' => 0.30, 'sifat' => 'cost'],
            ['id_kriteria' => 'C2', 'nama_kriteria' => 'Tahun Produksi', 'bobot' => 0.20, 'sifat' => 'benefit'],
            ['id_kriteria' => 'C3', 'nama_kriteria' => 'Jarak Tempuh', 'bobot' => 0.20, 'sifat' => 'cost'],
            ['id_kriteria' => 'C4', 'nama_kriteria' => 'Transmisi', 'bobot' => 0.10, 'sifat' => 'benefit'],
            ['id_kriteria' => 'C5', 'nama_kriteria' => 'Fitur', 'bobot' => 0.20, 'sifat' => 'benefit'],
        ]);

        // 2. Seed Data Mobil (Alternatif) 
        DB::table('mobil')->insert([
            ['id_mobil' => 'A1', 'merek_tipe' => 'Toyota Fortuner', 'harga' => 395, 'tahun' => 2018, 'jarak_tempuh' => 75, 'transmisi' => 'Automatic', 'fitur' => 4],
            ['id_mobil' => 'A2', 'merek_tipe' => 'Mitsubishi Pajero Sport', 'harga' => 425, 'tahun' => 2019, 'jarak_tempuh' => 68, 'transmisi' => 'Automatic', 'fitur' => 5],
            ['id_mobil' => 'A3', 'merek_tipe' => 'Honda CR-V', 'harga' => 360, 'tahun' => 2020, 'jarak_tempuh' => 55, 'transmisi' => 'Automatic', 'fitur' => 5],
            ['id_mobil' => 'A4', 'merek_tipe' => 'Nissan X-Trail', 'harga' => 325, 'tahun' => 2017, 'jarak_tempuh' => 82, 'transmisi' => 'Manual', 'fitur' => 4],
            ['id_mobil' => 'A5', 'merek_tipe' => 'Hyundai Santa Fe', 'harga' => 410, 'tahun' => 2019, 'jarak_tempuh' => 70, 'transmisi' => 'Automatic', 'fitur' => 5],
            ['id_mobil' => 'A6', 'merek_tipe' => 'Suzuki XL7', 'harga' => 250, 'tahun' => 2021, 'jarak_tempuh' => 25, 'transmisi' => 'Automatic', 'fitur' => 3],
            ['id_mobil' => 'A7', 'merek_tipe' => 'Wuling Almaz', 'harga' => 300, 'tahun' => 2020, 'jarak_tempuh' => 40, 'transmisi' => 'Automatic', 'fitur' => 4],
            ['id_mobil' => 'A8', 'merek_tipe' => 'Mazda CX-5', 'harga' => 370, 'tahun' => 2018, 'jarak_tempuh' => 60, 'transmisi' => 'Automatic', 'fitur' => 5],
            ['id_mobil' => 'A9', 'merek_tipe' => 'Chevrolet Captiva', 'harga' => 285, 'tahun' => 2017, 'jarak_tempuh' => 90, 'transmisi' => 'Automatic', 'fitur' => 3],
            ['id_mobil' => 'A10', 'merek_tipe' => 'Daihatsu Terios', 'harga' => 215, 'tahun' => 2021, 'jarak_tempuh' => 20, 'transmisi' => 'Manual', 'fitur' => 3],
        ]);
    }
}