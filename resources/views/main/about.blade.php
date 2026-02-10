<x-base-layout>
    <main class="max-w-7xl mx-auto px-6 py-16">

        <!-- Hero / Profile -->
        <section class="text-center mb-20">
            <h1 class="text-5xl md:text-6xl font-bold text-white drop-shadow-lg">
                Niels de Gast
            </h1>
            <p class="text-gray-300 text-xl mt-4">
                Content Creator & Gamer sinds 2021
            </p>
        </section>

        <!-- Over mij -->
        <section class="bg-gradient-to-br from-gray-900 to-black rounded-2xl p-8 md:p-12 mb-20">
            <h2 class="text-3xl font-bold text-red-600 mb-6 text-center">
                Over Mij
            </h2>
            <p class="text-gray-200 text-lg leading-relaxed text-center max-w-4xl mx-auto">
                Hey! Ik ben Niels, een <span id="age"></span>-jarige content creator uit Nederland.
                Sinds 2021 deel ik mijn passie voor gaming en entertainment op YouTube.
                Ik upload wanneer ik inspiratie en tijd heb kwaliteit boven kwantiteit.
            </p>
        </section>

        <!-- Hobbies -->
        <section class="mb-20">
            <h2 class="text-3xl font-bold text-white text-center mb-10">
                Mijn Hobbies
            </h2>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Card -->
                <div class="bg-gradient-to-br from-gray-900 to-black p-8 rounded-2xl text-center hover:-translate-y-2 transition-transform">
                    <i class="fas fa-gamepad text-4xl text-red-600 mb-4"></i>
                    <h3 class="text-white text-xl font-semibold mb-2">Gaming</h3>
                    <p class="text-gray-300">Vooral Minecraft, maar ook andere games</p>
                </div>

                <div class="bg-gradient-to-br from-gray-900 to-black p-8 rounded-2xl text-center hover:-translate-y-2 transition-transform">
                    <i class="fas fa-code text-4xl text-red-600 mb-4"></i>
                    <h3 class="text-white text-xl font-semibold mb-2">Programmeren</h3>
                    <p class="text-gray-300">Websites & applicaties bouwen</p>
                </div>

                <div class="bg-gradient-to-br from-gray-900 to-black p-8 rounded-2xl text-center hover:-translate-y-2 transition-transform">
                    <i class="fas fa-camera text-4xl text-red-600 mb-4"></i>
                    <h3 class="text-white text-xl font-semibold mb-2">Fotografie</h3>
                    <p class="text-gray-300">Momenten vastleggen</p>
                </div>

                <div class="bg-gradient-to-br from-gray-900 to-black p-8 rounded-2xl text-center hover:-translate-y-2 transition-transform">
                    <i class="fas fa-ferris-wheel text-4xl text-red-600 mb-4"></i>
                    <h3 class="text-white text-xl font-semibold mb-2">Pretparken</h3>
                    <p class="text-gray-300">Avontuur & adrenaline</p>
                </div>
            </div>
        </section>

        <!-- YouTube Journey -->
        <section class="mb-20">
            <h2 class="text-3xl font-bold text-white text-center mb-10">
                Mijn YouTube Avontuur
            </h2>

            <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <div class="bg-gradient-to-br from-gray-900 to-black p-8 rounded-2xl text-center hover:-translate-y-2 transition-transform">
                    <i class="fas fa-play text-3xl text-red-600 mb-4"></i>
                    <h3 class="text-white text-xl font-semibold">Start</h3>
                    <p class="text-gray-300 mt-2">2021</p>
                </div>

                <div class="bg-gradient-to-br from-gray-900 to-black p-8 rounded-2xl text-center hover:-translate-y-2 transition-transform">
                    <i class="fas fa-video text-3xl text-red-600 mb-4"></i>
                    <h3 class="text-white text-xl font-semibold">Content</h3>
                    <p class="text-gray-300 mt-2">Gaming & Entertainment</p>
                </div>

                <div class="bg-gradient-to-br from-gray-900 to-black p-8 rounded-2xl text-center hover:-translate-y-2 transition-transform">
                    <i class="fab fa-youtube text-3xl text-red-600 mb-4"></i>
                    <h3 class="text-white text-xl font-semibold">Platform</h3>
                    <p class="text-gray-300 mt-2">YouTube</p>
                </div>
            </div>
        </section>

    </main>

    <!-- Leeftijd script -->
    <script>
        const birthDate = new Date('2006-02-07');
        const today = new Date();
        let age = today.getFullYear() - birthDate.getFullYear();
        const m = today.getMonth() - birthDate.getMonth();

        if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
            age--;
        }

        document.getElementById('age').textContent = age;
        document.getElementById('age-text').textContent = age;
    </script>
</x-base-layout>
