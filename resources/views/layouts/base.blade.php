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
        <nav class="max-w-7xl mx-auto px-6 flex justify-between items-center py-4 relative">
            <div class="nav-brand">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('img/ndg.png') }}" alt="Logo" class="h-10 w-auto nav-logo">
                </a>
            </div>

            <!-- Links -->
            <div class="nav-links hidden md:flex gap-8">
                <a href="{{ route('home') }}" class="nav-link relative text-white font-medium hover:text-red-600">Home</a>
                <a href="{{ route('idee') }}" class="nav-link relative text-white font-medium hover:text-red-600">Idee</a>
                <a href="{{ route('aboutme') }}" class="nav-link relative text-white font-medium hover:text-red-600">Aboutme</a>
                <a href="{{ route('contact.create') }}" class="nav-link relative text-white font-medium hover:text-red-600">Contact</a>
            </div>

            <!-- Social Icons -->
            <div class="nav-social hidden md:flex gap-6">
                <a href="https://www.youtube.com/@nielsdegast" target="_blank" class="hover:text-red-600 transition-transform transform hover:-translate-y-1"><i class="fab fa-youtube"></i></a>
                <a href="https://discord.gg/PPVBhBemSf" target="_blank" class="hover:text-red-600 transition-transform transform hover:-translate-y-1"><i class="fab fa-discord"></i></a>
            </div>

            <!-- Mobile toggle -->
            <button id="navToggle" class="md:hidden text-white text-2xl">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Mobile Menu -->
            <div id="mobileMenu" class="absolute top-full left-0 right-0 bg-black/95 flex flex-col hidden text-center md:hidden">
                <a href="{{ route('home') }}" class="py-4 border-b border-gray-800">Home</a>
                <a href="{{ route('idee') }}" class="py-4 border-b border-gray-800">Idee</a>
                <a href="{{ route('aboutme') }}" class="py-4 border-b border-gray-800">Aboutme</a>
                {{-- <a href="{{ route('contact') }}" class="py-4">Contact</a> --}}
            </div>
        </nav>
    </header>

    <!-- Main content -->
    <main class="min-h-screen">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-black pt-16 pb-4 mt-16">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-3 gap-12 mb-12 text-left md:text-left">
                <!-- About -->
                <div class="footer-section">
                    <h3 class="text-red-600 text-xl font-semibold mb-4 relative after:content-[''] after:absolute after:left-0 after:bottom-[-8px] after:w-12 after:h-[2px] after:bg-red-600">Over Mij</h3>
                    <p class="text-gray-400 mb-2">YouTuber & Content Creator</p>
                    <p class="text-gray-400 mb-2">Gaming & Entertainment</p>
                    <p class="text-gray-400 mb-2">Artiest</p>
                </div>

                <!-- Social Links -->
                <div class="footer-section">
                    <h3 class="text-red-600 text-xl font-semibold mb-4 relative after:content-[''] after:absolute after:left-0 after:bottom-[-8px] after:w-12 after:h-[2px] after:bg-red-600">Social Media</h3>
                    <ul class="flex gap-6">
                        <li><a href="https://discord.gg/PPVBhBemSf" target="_blank"><i class="fab fa-discord text-2xl hover:text-red-600 transition-transform transform hover:-translate-y-1"></i></a></li>
                        <li><a href="https://www.youtube.com/@nielsdegast" target="_blank"><i class="fab fa-youtube text-2xl hover:text-red-600 transition-transform transform hover:-translate-y-1"></i></a></li>
                        <li><a href="https://www.tiktok.com/@nielsdegastyt" target="_blank"><i class="fab fa-tiktok text-2xl hover:text-red-600 transition-transform transform hover:-translate-y-1"></i></a></li>
                        <li><a href="https://x.com/nielsdegastyt" target="_blank"><i class="fab fa-x text-2xl hover:text-red-600 transition-transform transform hover:-translate-y-1"></i></a></li>
                        <li><a href="https://open.spotify.com/artist/6EyPJVn7KN6SIkhtiMY0fT" target="_blank"><i class="fab fa-spotify text-2xl hover:text-red-600 transition-transform transform hover:-translate-y-1"></i></a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div class="footer-section">
                    <h3 class="text-red-600 text-xl font-semibold mb-4 relative after:content-[''] after:absolute after:left-0 after:bottom-[-8px] after:w-12 after:h-[2px] after:bg-red-600">Contact</h3>
                    <address class="not-italic">
                        <p class="flex items-center gap-2 mb-2"><i class="far fa-envelope"></i> <a href="mailto:info@nielsdegast.nl" class="text-gray-400 hover:text-red-600 transition-colors">info@nielsdegast.nl</a></p>
                        <p class="flex items-center gap-2"><i class="fas fa-location-dot"></i> Nederland</p>
                    </address>
                </div>
            </div>

            <div class="footer-bottom text-center border-t border-gray-800 pt-4 text-gray-500">
                <p>&copy; 2025 Niels de Gast | Alle rechten voorbehouden</p>
                <p>Made by <a href="https://ndg-webdesign.net" target="_blank" class="text-red-600">NDG-Webdesign</a></p>
            </div>
        </div>
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
