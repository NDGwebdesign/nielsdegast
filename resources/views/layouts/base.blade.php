<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Niels de Gast</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/97a72c77c3.js" crossorigin="anonymous"></script>
</head>
<body class="bg-[#111] text-white font-poppins">

    <!-- Header / Navbar -->
    <header class="bg-black/95 sticky top-0 z-50 shadow-md shadow-red-500/20">
        <x-navbar />
    </header>

    <!-- Main content -->
    <main class="min-h-screen">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-black pt-16 pb-4 mt-16">
        <x-footer />
    </footer>

    <script>
        // Mobile menu toggle
        const navToggle = document.getElementById('navToggle');
        const mobileMenu = document.getElementById('mobileMenu');

        navToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
