<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    public function index() {
        $kriterias = Kriteria::orderByRaw('LENGTH(id_kriteria) ASC')
                   ->orderBy('id_kriteria', 'ASC')
                   ->get();
        // Memanggil file: resources/views/bobot_kriteria.blade.php
        return view('bobot_kriteria', compact('kriterias'));
    }

    public function create() {
        // Memanggil file: resources/views/bobot_kriteria_create.blade.php
        return view('bobot_kriteria.create');
    }

    public function store(Request $request) {
        Kriteria::create($request->all());
        // Redirect kembali ke halaman utama kriteria
        return redirect()->route('kriteria.index')->with('success', 'Kriteria berhasil ditambah');
    }

    public function edit($id) {
        $kriteria = Kriteria::findOrFail($id);
        // Memanggil file: resources/views/bobot_kriteria_edit.blade.php
        return view('bobot_kriteria.edit', compact('kriteria'));
    }

    public function update(Request $request, $id) {
        $kriteria = Kriteria::findOrFail($id);
        $kriteria->update($request->all());
        return redirect()->route('kriteria.index')->with('success', 'Kriteria berhasil diupdate');
    }

    public function destroy($id) {
        Kriteria::findOrFail($id)->delete();
        return redirect()->route('kriteria.index')->with('success', 'Data berhasil dihapus');
    }
}