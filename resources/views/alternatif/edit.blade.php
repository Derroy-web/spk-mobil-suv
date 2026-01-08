@extends('layouts.app')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold">Edit Alternatif</h1>
    <a href="{{ route('alternatif.index') }}" class="text-gray-600 hover:underline"><- Kembali ke Daftar</a>
</div>

<div class="bg-white p-8 rounded-2xl border border-gray-300 shadow-sm">
    <form action="{{ route('alternatif.update', $mobil->id_mobil) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block font-bold text-gray-700 mb-2">ID Mobil</label>
                <input type="text" value="{{ $mobil->id_mobil }}" class="w-full border border-gray-300 p-2 rounded-lg bg-gray-100 cursor-not-allowed" readonly>
                <p class="text-xs text-gray-500 mt-1">*ID Mobil tidak dapat diubah</p>
            </div>

            <div>
                <label class="block font-bold text-gray-700 mb-2">Nama Mobil (Merek & Tipe)</label>
                <input type="text" name="merek_tipe" value="{{ $mobil->merek_tipe }}" class="w-full border border-gray-300 p-2 rounded-lg focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div>
                <label class="block font-bold text-gray-700 mb-2">Harga (Juta Rupiah)</label>
                <input type="number" name="harga" value="{{ $mobil->harga }}" class="w-full border border-gray-300 p-2 rounded-lg focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div>
                <label class="block font-bold text-gray-700 mb-2">Tahun Produksi</label>
                <input type="number" name="tahun" value="{{ $mobil->tahun }}" class="w-full border border-gray-300 p-2 rounded-lg focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div>
                <label class="block font-bold text-gray-700 mb-2">Jarak Tempuh (Ribu KM)</label>
                <input type="number" name="jarak_tempuh" value="{{ $mobil->jarak_tempuh }}" class="w-full border border-gray-300 p-2 rounded-lg focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div>
                <label class="block font-bold text-gray-700 mb-2">Transmisi</label>
                <select name="transmisi" class="w-full border border-gray-300 p-2 rounded-lg focus:ring-2 focus:ring-blue-500">
                    <option value="Automatic" {{ $mobil->transmisi == 'Automatic' ? 'selected' : '' }}>Automatic</option>
                    <option value="Manual" {{ $mobil->transmisi == 'Manual' ? 'selected' : '' }}>Manual</option>
                </select>
            </div>

            <div class="md:col-span-2">
                <label class="block font-bold text-gray-700 mb-2">Skor Fitur (1-5)</label>
                <input type="number" name="fitur" value="{{ $mobil->fitur }}" min="1" max="5" class="w-full border border-gray-300 p-2 rounded-lg focus:ring-2 focus:ring-blue-500" required>
                <p class="text-xs text-gray-500 mt-1">1 = Sangat Kurang, 5 = Sangat Lengkap</p>
            </div>
        </div>

        <div class="mt-8 flex space-x-3">
            <button type="submit" class="bg-blue-600 text-white px-8 py-2 rounded-lg font-bold hover:bg-blue-700 transition">
                Simpan Perubahan
            </button>
            <a href="{{ route('alternatif.index') }}" class="bg-gray-200 text-gray-700 px-8 py-2 rounded-lg font-bold hover:bg-gray-300 transition">
                Batal
            </a>
        </div>
    </form>
</div>
@endsection