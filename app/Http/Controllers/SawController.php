<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Models\Kriteria;
use Illuminate\Http\Request;

class SawController extends Controller
{
    private function getMinMax()
    {
        $kriterias = Kriteria::orderByRaw('LENGTH(id_kriteria) ASC')
                   ->orderBy('id_kriteria', 'ASC')
                   ->get();
        $minMax = [];
        $mapping = [
            'C1' => 'harga',
            'C2' => 'tahun',
            'C3' => 'jarak_tempuh',
            'C4' => 'transmisi',
            'C5' => 'fitur'
        ];

        foreach ($kriterias as $k) {
            $column = $mapping[$k->id_kriteria] ?? strtolower($k->id_kriteria);
            
            // Khusus transmisi, kita asumsikan Max=2 (Auto) dan Min=1 (Manual)
            if ($column == 'transmisi') {
                $maxVal = 2;
                $minVal = 1;
            } else {
                $maxVal = Mobil::max($column);
                $minVal = Mobil::min($column);
            }

            $minMax[$k->id_kriteria] = [
                'max' => $maxVal,
                'min' => $minVal,
                'sifat' => $k->sifat,
                'bobot' => $k->bobot,
                'column_name' => $column
            ];
        }
        return $minMax;
    }

    public function matrix()
    {
        $mobils = Mobil::orderByRaw('LENGTH(id_mobil) ASC')
                   ->orderBy('id_mobil', 'ASC')
                   ->get();
        $kriterias = Kriteria::orderByRaw('LENGTH(id_kriteria) ASC')
                   ->orderBy('id_kriteria', 'ASC')
                   ->get();
        $minMax = $this->getMinMax();

        $matrixR = [];
        foreach ($mobils as $m) {
            foreach ($kriterias as $k) {
                $column = $minMax[$k->id_kriteria]['column_name'];
                $nilai = $m->$column;

                // Konversi teks Transmisi ke Angka agar bisa dihitung
                if ($column == 'transmisi') {
                    $nilai = ($nilai == 'Automatic') ? 2 : 1;
                }

                if ($k->sifat == 'benefit') {
                    $matrixR[$m->id_mobil][$k->id_kriteria] = $nilai / $minMax[$k->id_kriteria]['max'];
                } else {
                    $matrixR[$m->id_mobil][$k->id_kriteria] = $minMax[$k->id_kriteria]['min'] / $nilai;
                }
            }
        }
        return view('matrix', compact('mobils', 'kriterias', 'matrixR'));
    }

    public function hitung()
    {
        $mobils = Mobil::orderByRaw('LENGTH(id_mobil) ASC')
                   ->orderBy('id_mobil', 'ASC')
                   ->get();
        $kriterias = Kriteria::orderByRaw('LENGTH(id_kriteria) ASC')
                   ->orderBy('id_kriteria', 'ASC')
                   ->get();
        $minMax = $this->getMinMax();

        $ranking = [];
        foreach ($mobils as $m) {
            $nilaiV = 0;
            foreach ($kriterias as $k) {
                $column = $minMax[$k->id_kriteria]['column_name'];
                $nilai = $m->$column;

                if ($column == 'transmisi') {
                    $nilai = ($nilai == 'Automatic') ? 2 : 1;
                }

                // Normalisasi (R)
                if ($k->sifat == 'benefit') {
                    $r = $nilai / $minMax[$k->id_kriteria]['max'];
                } else {
                    $r = $minMax[$k->id_kriteria]['min'] / $nilai;
                }

                // Perangkingan (V)
                $nilaiV += ($r * $minMax[$k->id_kriteria]['bobot']);
            }

            $ranking[] = [
                'id_mobil' => $m->id_mobil,
                'nama' => $m->merek_tipe,
                'nilai_p' => round($nilaiV, 3)
            ];
        }

        $ranking = collect($ranking)->sortByDesc('nilai_p')->values()->all();
        return view('halaman_hasil', compact('ranking'));
    }
}