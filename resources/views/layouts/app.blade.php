<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPK Mobil SUV</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-50">
    <div class="flex min-h-screen">
        <div class="w-64 bg-white border-r border-gray-200">
            <div class="p-6 text-center border-b font-bold text-2xl">SPK SAW</div>
            <nav class="p-4 space-y-2">
                <a href="/" class="block p-3 hover:bg-gray-100 rounded">Dashboard</a>
                <div class="p-3 font-semibold text-gray-500">Data</div>
                <a href="/alternatif" class="block p-3 pl-8 hover:bg-gray-100 rounded">Alternatif</a>
                <a href="/kriteria" class="block p-3 pl-8 hover:bg-gray-100 rounded">Bobot & Kriteria</a>
                <a href="/matrix" class="block p-3 hover:bg-gray-100 rounded">Matrix</a>
                <a href="/hitung" class="block p-3 hover:bg-gray-100 rounded">Hasil</a>
            </nav>
        </div>
        <div class="flex-1 p-10">
            @yield('content')
        </div>
    </div>
</body>
</html>