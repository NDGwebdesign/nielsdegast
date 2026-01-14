<nav class="max-w-7xl mx-auto px-6 flex justify-between items-center py-4 relative">
    <div class="nav-brand">
        <a href="{{ route('home') }}">
            <img src="{{ asset('img/ndg.png') }}" alt="Logo" class="h-10 w-10 rounded-full object-cover bg-black/95 border border-white/10 nav-logo">
        </a>
    </div>

    <!-- Links -->
    <div class="nav-links hidden md:flex gap-8">
        <a href="{{ route('admin.dashboard') }}" class="nav-link relative text-white font-medium hover:text-red-600">Admin</a>
        <a href="{{ route('admin.contacts.index') }}" class="nav-link relative text-white font-medium hover:text-red-600">Contacten</a>
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
        <a href="{{ route('admin.dashboard') }}" class="py-4 border-b border-gray-800">Admin</a>
        <a href="{{ route('admin.contacts.index') }}" class="py-4 border-b border-gray-800">Contacten</a>
    </div>
</nav>