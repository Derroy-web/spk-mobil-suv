@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-bold mb-6">Edit Kriteria</h1>
<form action="{{ route('kriteria.update', $kriteria->id_kriteria) }}" method="POST" class="bg-white p-8 rounded-2xl border border-gray-300 shadow-sm space-y-4">
    @csrf @method('PUT')
    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block font-bold mb-1">ID Kriteria</label>
            <input type="text" value="{{ $kriteria->id_kriteria }}" class="w-full border p-2 rounded bg-gray-100" readonly>
        </div>
        <div>
            <label class="block font-bold mb-1">Nama Kriteria</label>
            <input type="text" name="nama_kriteria" value="{{ $kriteria->nama_kriteria }}" class="w-full border p-2 rounded" required>
        </div>
        <div>
            <label class="block font-bold mb-1">Bobot (Contoh: 0.25)</label>
            <input type="number" step="0.01" name="bobot" value="{{ $kriteria->bobot }}" class="w-full border p-2 rounded" required>
        </div>
        <div>
            <label class="block font-bold mb-1">Tipe (Sifat)</label>
            <select name="sifat" class="w-full border p-2 rounded">
                <option value="benefit" {{ $kriteria->sifat == 'benefit' ? 'selected' : '' }}>Benefit</option>
                <option value="cost" {{ $kriteria->sifat == 'cost' ? 'selected' : '' }}>Cost</option>
            </select>
        </div>
    </div>
    <div class="pt-4 flex space-x-2">
        <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg">Update</button>
        <a href="{{ route('kriteria.index') }}" class="bg-gray-200 px-6 py-2 rounded-lg">Batal</a>
    </div>
</form>
@endsection