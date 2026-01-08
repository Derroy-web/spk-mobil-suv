<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    public function index(){
        // Mengambil data lengkap sesuai kriteria C1-C5 di dokumen 
        $mobils = Mobil::orderByRaw('LENGTH(id_mobil) ASC')
                   ->orderBy('id_mobil', 'ASC')
                   ->get();
        return view('alternatif', compact('mobils')); 
    }

    // Menampilkan Form Tambah
    public function create() {
        return view('alternatif.create');
    }

    // Simpan Data ke Database
    public function store(Request $request) {
        Mobil::create($request->all());
        return redirect('/alternatif')->with('success', 'Data berhasil ditambahkan');
    }

    // Menampilkan Form Edit
    public function edit($id) {
        $mobil = Mobil::findOrFail($id);
        return view('alternatif.edit', compact('mobil'));
    }

    // Simpan Edit ke Database
    public function update(Request $request, $id) {
        $mobil = Mobil::findOrFail($id);
        $mobil->update($request->all());
        return redirect('/alternatif')->with('success', 'Data berhasil diubah');
    }

    // Hapus Data
    public function destroy($id) {
        Mobil::findOrFail($id)->delete();
        return redirect('/alternatif')->with('success', 'Data berhasil dihapus');
    }
}