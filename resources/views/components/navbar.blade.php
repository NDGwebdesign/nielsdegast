<nav class="max-w-7xl mx-auto px-6 flex justify-between items-center py-4 relative">
    <div class="nav-brand">
        <a href="{{ route('home') }}">
            <img src="{{ asset('img/ndg.png') }}" alt="Logo" class="h-10 w-auto nav-logo">
        </a>
    </div>

    <!-- Links -->
    <div class="nav-links hidden md:flex gap-8">
        <a href="{{ route('home') }}" class="nav-link relative text-white font-medium hover:text-red-600">Home</a>
        {{-- <a href="{{ route('idee') }}" class="nav-link relative text-white font-medium hover:text-red-600">Idee</a> --}}
        <a href="{{ route('aboutme') }}" class="nav-link relative text-white font-medium hover:text-red-600">Over mij</a>
        <a href="{{ route('contact.index') }}"
            class="nav-link relative text-white font-medium hover:text-red-600">Contact</a>
    </div>

    <!-- Social Icons -->
    <div class="nav-social hidden md:flex gap-6">
        <a href="https://www.youtube.com/@nielsdegast" target="_blank"
            class="hover:text-red-600 transition-transform transform hover:-translate-y-1"><i
                class="fab fa-youtube"></i></a>
        <a href="https://discord.gg/PPVBhBemSf" target="_blank"
            class="hover:text-red-600 transition-transform transform hover:-translate-y-1"><i
                class="fab fa-discord"></i></a>
    </div>

    <!-- Mobile toggle -->
    <button id="navToggle" class="md:hidden text-white text-2xl">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Mobile Menu -->
    <div id="mobileMenu"
        class="absolute top-full left-0 right-0 bg-black/95 flex flex-col hidden text-center md:hidden">
        <a href="{{ route('home') }}" class="py-4 border-b border-gray-800">Home</a>
        {{-- <a href="{{ route('idee') }}" class="py-4 border-b border-gray-800">Idee</a> --}}
        <a href="{{ route('aboutme') }}" class="py-4 border-b border-gray-800">Over mij</a>
        <a href="{{ route('contact.index') }}" class="py-4">Contact</a>
    </div>
</nav>