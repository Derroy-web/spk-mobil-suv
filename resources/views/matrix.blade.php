@extends('layouts.app')

@section('content')
<div class="p-6">
    <h1 class="text-2xl font-bold mb-4">Matriks Ternormalisasi (R)</h1>
    
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="w-full text-left">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="p-4 border">Alternatif</th>
                    @foreach($kriterias as $k)
                        <th class="p-4 border text-center">{{ $k->id_kriteria }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach($mobils as $m)
                <tr class="border-b">
                    <td class="p-4 font-bold border">{{ $m->id_mobil }}</td>
                    @foreach($kriterias as $k)
                        <td class="p-4 text-center border">
                            {{ number_format($matrixR[$m->id_mobil][$k->id_kriteria], 3) }}
                        </td>
                    @endforeach
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection