@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-bold mb-6">Dashboard</h1>
<div class="bg-white p-8 rounded-2xl border border-gray-300 shadow-sm">
    <h2 class="text-xl font-bold mb-4">Sistem Pendukung Keputusan Mobil SUV Bekas Terbaik</h2>
    <p class="text-gray-600 mb-6 leading-relaxed">
        Metode Simple Additive Weighting (SAW) merupakan metode penjumlahan terbobot dalam menentukan alternatif terbaik berdasarkan sejumlah kriteria. Pada sistem ini SAW digunakan untuk membantu proses pemilihan mobil SUV bekas terbaik dengan mempertimbangkan beberapa aspek penting.
    </p>
    <p class="text-gray-600 mb-6 leading-relaxed">
        Metode SAW dipilih karena mudah dipahami, sederhana diterapkan, dan mampu memberikan hasil penilaian yang jelas melalui proses normalisasi dan pembobotan pada setiap kriteria. Dengan pendekatan ini, pengguna dapat memperoleh rekomendasi mobil SUV bekas yang sesual dengan kebutuhan dan preferensinya.
    </p>
    <h3 class="font-bold mb-3">Langkah Penyelesaian SAW:</h3>
    <ol class="list-decimal pl-5 space-y-2 text-gray-600">
        <li>Menentukan kriteria-kriteria acuan.</li>
        <li>Menentukan nilai kecocokan setiap alternatif.</li>
        <li>Menyusun matriks keputusan dan normalisasi.</li>
        <li>Menghitung nilai akhir rangking.</li>
    </ol>
</div>
@endsection