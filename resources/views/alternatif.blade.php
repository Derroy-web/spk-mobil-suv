@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-bold mb-6">Alternatif</h1>

<div class="bg-white p-6 rounded-2xl border border-gray-300 shadow-sm">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-bold">Tabel Alternatif</h2>
        <a href="{{ route('alternatif.create') }}" class="bg-white border border-gray-300 px-4 py-2 rounded-lg hover:bg-gray-50 inline-block">
            + Tambah Alternatif
        </a>
    </div>

    <table class="w-full text-left">
        <thead>
            <tr class="border-b text-gray-500">
                <th class="p-3">ID</th>
                <th class="p-3">Nama Mobil</th>
                <th class="p-3">Harga</th>
                <th class="p-3">Tahun Produksi</th> <th class="p-3">Jarak Tempuh</th> <th class="p-3">Transmisi</th> <th class="p-3">Fitur</th> <th class="p-3 text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mobils as $m)
            <tr class="border-b hover:bg-gray-50">
                <td class="p-3">{{ $m->id_mobil }}</td>
                <td class="p-3 font-semibold text-blue-900">{{ $m->merek_tipe }}</td>
                <td class="p-3">{{ $m->harga }} Juta</td>
                <td class="p-3">{{ $m->tahun }}</td> <td class="p-3">{{ $m->jarak_tempuh }} Ribu KM</td> 
                <td class="p-3">{{ $m->transmisi }}</td> <td class="p-3">{{ $m->fitur }}</td> 
                <td class="p-3 flex justify-center space-x-4">
                    <a href="{{ route('alternatif.edit', $m->id_mobil) }}" class="text-blue-600 font-bold">Edit</a>
                    <form action="{{ route('alternatif.destroy', $m->id_mobil) }}" method="POST" onsubmit="return confirm('Hapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 font-bold">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection