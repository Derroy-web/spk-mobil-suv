@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-bold mb-6">Nilai Preferensi</h1>

<div class="bg-white rounded-2xl border border-gray-300 shadow-sm overflow-hidden">
    <div class="p-4 bg-gray-50 border-b font-bold">Tabel Nilai Preferensi</div>
    <table class="w-full text-left">
        <thead class="bg-gray-800 text-white">
            <tr>
                <th class="p-4">Peringkat</th>
                <th class="p-4">Alternatif</th>
                <th class="p-4">Nilai Preferensi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ranking as $index => $row)
            <tr class="border-b hover:bg-gray-50 {{ $index == 0 ? 'bg-yellow-50' : '' }}">
                <td class="p-4">{{ $index + 1 }}.</td>
                <td class="p-4">{{ $row['nama'] }} ({{ $row['id_mobil'] }})</td>
                <td class="p-4 font-bold">{{ $row['nilai_p'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="mt-6 p-4 bg-blue-100 border border-blue-200 rounded-lg">
    <strong>Kesimpulan:</strong> Berdasarkan perhitungan SAW, alternatif 
    <span class="text-blue-700 font-bold">{{ $ranking[0]['nama'] }}</span> 
    menjadi pilihan terbaik dengan nilai tertinggi sebesar {{ $ranking[0]['nilai_p'] }}.
</div>
@endsection