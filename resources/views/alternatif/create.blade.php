@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-bold mb-6">Tambah Alternatif</h1>
<form action="{{ route('alternatif.store') }}" method="POST" class="bg-white p-8 rounded-2xl border border-gray-300 shadow-sm space-y-4">
    @csrf
    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block font-bold mb-1">ID Mobil (Contoh: A11)</label>
            <input type="text" name="id_mobil" class="w-full border p-2 rounded" required>
        </div>
        <div>
            <label class="block font-bold mb-1">Nama Mobil</label>
            <input type="text" name="merek_tipe" class="w-full border p-2 rounded" required>
        </div>
        <div>
            <label class="block font-bold mb-1">Harga (Juta)</label>
            <input type="number" name="harga" class="w-full border p-2 rounded" required>
        </div>
        <div>
            <label class="block font-bold mb-1">Tahun Produksi</label>
            <input type="number" name="tahun" class="w-full border p-2 rounded" required>
        </div>
        <div>
            <label class="block font-bold mb-1">Jarak Tempuh (Ribu KM)</label>
            <input type="number" name="jarak_tempuh" class="w-full border p-2 rounded" required>
        </div>
        <div>
            <label class="block font-bold mb-1">Fitur (Skor 1-5)</label>
            <input type="number" name="fitur" min="1" max="5" class="w-full border p-2 rounded" required>
        </div>
        <div>
            <label class="block font-bold mb-1">Transmisi</label>
            <select name="transmisi" class="w-full border p-2 rounded">
                <option value="Automatic">Automatic</option>
                <option value="Manual">Manual</option>
            </select>
        </div>
    </div>
    <div class="pt-4 flex space-x-2">
        <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg">Simpan</button>
        <a href="{{ route('alternatif.index') }}" class="bg-gray-200 px-6 py-2 rounded-lg">Batal</a>
    </div>
</form>
@endsection