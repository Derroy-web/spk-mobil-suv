@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-bold mb-6">Bobot & Kriteria</h1>

<div class="bg-white p-6 rounded-2xl border border-gray-300 shadow-sm">

    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-bold">Tabel Bobot & Kriteria</h2>
        <a href="{{ route('kriteria.create') }}" class="bg-white border border-gray-300 px-4 py-2 rounded-lg hover:bg-gray-50 inline-block">
            + Tambah Bobot & Kriteria
        </a>
    </div>

    <table class="w-full text-left">
        <thead>
            <tr class="border-b text-gray-500">
                <th class="p-3">ID</th>
                <th class="p-3">Nama Kriteria</th>
                <th class="p-3">Tipe</th>
                <th class="p-3">Bobot</th>
                <th class="p-3 text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kriterias as $k)
            <tr lass="border-b hover:bg-gray-50">
                <td class="p-3">{{ $k->id_kriteria }}</td>
                <td class="p-3">{{ $k->nama_kriteria }}</td>
                <td class="p-3 capitalize">{{ $k->sifat }}</td>
                <td class="p-3 font-bold">{{ $k->bobot }}</td>
                <td class="p-3 flex justify-center space-x-4">
                    <a href="{{ route('kriteria.edit', $k->id_kriteria) }}" class="text-blue-400 font-bold">Edit</a>
                    <form action="{{ route('kriteria.destroy', $k->id_kriteria) }}" method="POST" onsubmit="return confirm('Hapus kriteria ini?')">
                        @csrf @method('DELETE')
                        <button type="submit" class="text-red-600 font-bold">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection