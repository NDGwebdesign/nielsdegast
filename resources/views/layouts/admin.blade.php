<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#111] text-white min-h-screen font-sans">
    <header class="bg-gray-900 p-4 shadow-md">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold text-red-600">Admin Dashboard</h1>
            <a href="{{ route('home') }}" target="_blank" class="text-gray-300 hover:text-red-600">Bekijk site</a>
        </div>
    </header>
    <main class="max-w-7xl mx-auto p-6">
        {{ $slot }}
    </main>
    <footer class="text-center text-gray-400 mt-12 mb-6">
        &copy; 2025 Niels de Gast | Admin Panel
    </footer>
</body>
</html>
