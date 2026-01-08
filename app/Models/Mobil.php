<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    protected $table = 'mobil';
    protected $primaryKey = 'id_mobil';
    public $incrementing = false; // Karena ID berupa string seperti A1, A2 [cite: 128]
    protected $keyType = 'string';
    protected $fillable = ['id_mobil', 'merek_tipe', 'harga', 'tahun', 'jarak_tempuh', 'transmisi', 'fitur'];
}