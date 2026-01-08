@extends('layouts.app')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold">Tambah Kriteria Baru</h1>
    <a href="{{ route('kriteria.index') }}" class="text-gray-600 hover:underline"><- Kembali</a>
</div>

<div class="bg-white p-8 rounded-2xl border border-gray-300 shadow-sm">
    <form action="{{ route('kriteria.store') }}" method="POST">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block font-bold text-gray-700 mb-2">ID Kriteria (Kode)</label>
                <input type="text" name="id_kriteria" placeholder="Contoh: C1, C2, dst." class="w-full border border-gray-300 p-2 rounded-lg focus:ring-2 focus:ring-blue-500" required>
                <p class="text-xs text-gray-500 mt-1">*Gunakan format Cx (C1, C2...)</p>
            </div>

            <div>
                <label class="block font-bold text-gray-700 mb-2">Nama Kriteria</label>
                <input type="text" name="nama_kriteria" placeholder="Contoh: Harga, Tahun Produksi..." class="w-full border border-gray-300 p-2 rounded-lg focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div>
                <label class="block font-bold text-gray-700 mb-2">Bobot (Nilai 0 - 1)</label>
                <input type="number" step="0.01" name="bobot" placeholder="Contoh: 0.30" class="w-full border border-gray-300 p-2 rounded-lg focus:ring-2 focus:ring-blue-500" required>
                <p class="text-xs text-gray-500 mt-1">*Pastikan total seluruh bobot kriteria berjumlah 1.00</p>
            </div>

            <div>
                <label class="block font-bold text-gray-700 mb-2">Tipe (Sifat)</label>
                <select name="sifat" class="w-full border border-gray-300 p-2 rounded-lg focus:ring-2 focus:ring-blue-500">
                    <option value="benefit">Benefit (Semakin tinggi semakin baik)</option>
                    <option value="cost">Cost (Semakin rendah semakin baik)</option>
                </select>
            </div>
        </div>

        <div class="mt-8 flex space-x-3">
            <button type="submit" class="bg-blue-600 text-white px-8 py-2 rounded-lg font-bold hover:bg-blue-700 transition shadow-md">
                Simpan Kriteria
            </button>
            <a href="{{ route('kriteria.index') }}" class="bg-gray-200 text-gray-700 px-8 py-2 rounded-lg font-bold hover:bg-gray-300 transition">
                Batal
            </a>
        </div>
    </form>
</div>
@endsection