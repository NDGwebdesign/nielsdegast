<style>
    .nav-link {
        position: relative;
        transition: all 0.3s ease;
    }

    .nav-link::after {
        content: '';
        position: absolute;
        bottom: -5px;
        left: 0;
        width: 0;
        height: 2px;
        background-color: #ff0000;
        transition: width 0.3s ease;
    }

    .nav-link:hover::after {
        width: 100%;
    }

    .nav-link.active {
        color: #ff0000;
    }

    .nav-link.active::after {
        width: 100%;
    }
</style>

<nav class="max-w-7xl mx-auto px-6 flex justify-between items-center py-4 relative">
    <div class="nav-brand">
        <a href="{{ route('home') }}">
            <img src="{{ asset('img/ndg.png') }}" alt="Logo" class="h-10 w-10 rounded-full object-cover bg-black/95 border border-white/10 nav-logo">
        </a>
    </div>

    <!-- Links -->
    <div class="nav-links">
        <a href="{{ route('home') }}" class="nav-link">Home</a>
        {{-- <a href="{{ route('idee') }}" class="nav-link">Idee</a> --}}
        <a href="{{ route('aboutme') }}" class="nav-link">Over mij</a>
        <a href="{{ route('contact.index') }}" class="nav-link">Contact</a>
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
    <button id="navToggle" class="md:hidden text-white text-2xl focus:outline-none">
        <i class="fas fa-bars hamburger-icon"></i>
    </button>

    <!-- Mobile Menu -->
    <div id="mobileMenu"
        class="absolute top-full left-0 right-0 bg-black/95 flex flex-col hidden text-center md:hidden z-40">
        <a href="{{ route('home') }}" class="py-4 border-b border-gray-800 hover:bg-red-600/10 transition-colors">Home</a>
        {{-- <a href="{{ route('idee') }}" class="py-4 border-b border-gray-800 hover:bg-red-600/10 transition-colors">Idee</a> --}}
        <a href="{{ route('aboutme') }}" class="py-4 border-b border-gray-800 hover:bg-red-600/10 transition-colors">Over mij</a>
        <a href="{{ route('contact.index') }}" class="py-4 hover:bg-red-600/10 transition-colors">Contact</a>
    </div>
</nav>

<script>
    // Mobile menu toggle with smooth animation
    const navToggle = document.getElementById('navToggle');
    const mobileMenu = document.getElementById('mobileMenu');
    const hamburgerIcon = navToggle.querySelector('.hamburger-icon');
    let isMenuOpen = false;

    navToggle.addEventListener('click', () => {
        isMenuOpen = !isMenuOpen;
        
        if (isMenuOpen) {
            mobileMenu.classList.remove('hidden');
            mobileMenu.classList.add('menu-open');
            mobileMenu.classList.remove('menu-close');
            hamburgerIcon.classList.add('open');
            navToggle.classList.add('hamburger-open');
        } else {
            mobileMenu.classList.add('menu-close');
            hamburgerIcon.classList.remove('open');
            navToggle.classList.remove('hamburger-open');
            
            setTimeout(() => {
                if (!isMenuOpen) {
                    mobileMenu.classList.add('hidden');
                }
            }, 300);
        }
    });

    // Close menu when clicking on a link
    const menuLinks = mobileMenu.querySelectorAll('a');
    menuLinks.forEach(link => {
        link.addEventListener('click', () => {
            navToggle.click();
        });
    });
</script>