<x-base-layout>
    <main class="max-w-7xl mx-auto px-6">
        <!-- Hero Section -->
        <section class="hero min-h-[80vh] flex flex-col items-center justify-center text-center py-16">
            <h1 class="text-5xl md:text-6xl font-bold text-white drop-shadow-lg">Niels de Gast</h1>
            <p class="text-xl md:text-2xl text-gray-300 mt-4 mb-8">Gaming & Entertainment Content Creator</p>

            <!-- Subscriber Counter -->
            <div class="subscriber-counter mb-6">
                <div
                    class="counter-box bg-gradient-to-br from-gray-900 to-black p-8 rounded-2xl inline-block shadow-lg">
                    <i class="fab fa-youtube text-red-600 text-3xl mb-2"></i>
                    <span id="subCount" class="block text-3xl font-bold text-white mb-1">Loading...</span>
                    <p class="text-gray-300">Subscribers</p>
                </div>
            </div>

            <a href="https://www.youtube.com/@nielsdegast" target="_blank"
                class="cta-button inline-block bg-red-600 text-white px-8 py-4 rounded-full font-semibold transition-transform transform hover:-translate-y-1 hover:shadow-lg">
                Subscribe Now
            </a>
        </section>

        <!-- Latest Content Section -->
        <section class="latest-content py-12">
            <h2 class="text-3xl font-bold text-white text-center mb-8">Laatste Video's</h2>
            <div id="latestVideos" class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">

        </section>

        <!-- Content Highlights -->
        <section class="content-highlights py-12">
            <h2 class="text-3xl font-bold text-white text-center mb-8">Wat kun je verwachten?</h2>
            <div class="highlights-grid grid md:grid-cols-3 gap-8">
                <div
                    class="highlight-card bg-gradient-to-br from-gray-900 to-black p-8 rounded-2xl text-center transition-transform transform hover:-translate-y-1">
                    <i class="fas fa-gamepad text-3xl text-red-600 mb-4"></i>
                    <h3 class="text-white text-xl font-semibold mb-2">Gaming Content</h3>
                    <p class="text-gray-300">Ik speel veel games maar vooral Minecraft</p>
                </div>
                <div
                    class="highlight-card bg-gradient-to-br from-gray-900 to-black p-8 rounded-2xl text-center transition-transform transform hover:-translate-y-1">
                    <i class="fas fa-music text-3xl text-red-600 mb-4"></i>
                    <h3 class="text-white text-xl font-semibold mb-2">Muziek</h3>
                    <p class="text-gray-300">Originele muziek</p>
                </div>
                <div
                    class="highlight-card bg-gradient-to-br from-gray-900 to-black p-8 rounded-2xl text-center transition-transform transform hover:-translate-y-1">
                    <i class="fas fa-video text-3xl text-red-600 mb-4"></i>
                    <h3 class="text-white text-xl font-semibold mb-2">Entertainment</h3>
                    <p class="text-gray-300">Vlogs en entertainment video's</p>
                </div>
            </div>
        </section>

        <!-- About Preview -->
        <section class="about-preview py-12">
            <div class="about-content max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-white mb-4">Over Mij</h2>
                <p class="text-gray-300 mb-6">
                    Hey! Ik ben Niels de Gast, een Nederlandse content creator gespecialiseerd in gaming en
                    entertainment.
                    Op mijn kanaal deel ik mijn passie voor gaming, muziek en entertainment met jullie.
                    Van epische gameplay momenten tot muzikale video's en vermakelijke reactie video's - er is voor
                    ieder wat wils!
                </p>

                <!-- Stats -->
                <div class="stats-container grid md:grid-cols-3 gap-6 mb-6">
                    <div class="stat-item bg-red-100/10 p-6 rounded-lg text-center">
                        <i class="fas fa-eye text-2xl text-red-600 mb-2"></i>
                        <span class="view-count text-xl font-bold text-white block">Loading...</span>
                        <p class="text-gray-300">Views</p>
                    </div>
                    <div class="stat-item bg-red-100/10 p-6 rounded-lg text-center">
                        <i class="fas fa-video text-2xl text-red-600 mb-2"></i>
                        <span class="video-count text-xl font-bold text-white block">Loading...</span>
                        <p class="text-gray-300">Video's</p>
                    </div>
                    <div class="stat-item bg-red-100/10 p-6 rounded-lg text-center">
                        <i class="fas fa-users text-2xl text-red-600 mb-2"></i>
                        <span id="subCount2" class="text-xl font-bold text-white block">Loading...</span>
                        <p class="text-gray-300">Subscribers</p>
                    </div>
                </div>

                <a href="?page=aboutme"
                    class="read-more cta-button inline-block bg-red-600 text-white px-8 py-4 rounded-full font-semibold transition-transform transform hover:-translate-y-1 hover:shadow-lg">
                    Lees meer over mij →
                </a>
            </div>
        </section>

        <!-- Social Connect -->
        <section class="social-connect py-12">
            <h2 class="text-3xl font-bold text-white text-center mb-8">Volg Mij</h2>
            <div class="social-grid grid md:grid-cols-3 gap-6 max-w-4xl mx-auto">
                <a href="https://discord.gg/PPVBhBemSf"
                    class="social-card flex items-center justify-center gap-4 p-6 rounded-lg bg-[#7289da] text-white hover:-translate-y-1 transition-transform shadow-lg hover:shadow-[#7289da]">
                    <i class="fab fa-discord text-2xl"></i>
                    <span>Join Discord</span>
                </a>
                <a href="https://www.tiktok.com/@nielsdegastyt"
                    class="social-card flex items-center justify-center gap-4 p-6 rounded-lg bg-black text-white hover:-translate-y-1 transition-transform shadow-lg hover:shadow-black">
                    <i class="fab fa-tiktok text-2xl"></i>
                    <span>TikTok</span>
                </a>
                <a href="https://open.spotify.com/artist/6EyPJVn7KN6SIkhtiMY0fT"
                    class="social-card flex items-center justify-center gap-4 p-6 rounded-lg bg-[#1DB954] text-white hover:-translate-y-1 transition-transform shadow-lg hover:shadow-[#1DB954]">
                    <i class="fab fa-spotify text-2xl"></i>
                    <span>Spotify</span>
                </a>
            </div>
        </section>
    </main>
</x-base-layout>