<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    protected $table = 'kriteria';
    protected $primaryKey = 'id_kriteria';
    public $incrementing = false; // Karena ID berupa string seperti C1, C2 [cite: 120]
    protected $keyType = 'string';
    protected $fillable = ['id_kriteria', 'nama_kriteria', 'bobot', 'sifat'];
}