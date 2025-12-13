<x-base-layout>
    @if (session('success'))
        <div class="mb-6 bg-green-600/20 border border-green-600 text-green-400 px-6 py-4 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="mb-6 bg-red-600/20 border border-red-600 text-red-400 px-6 py-4 rounded-lg">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <main class="max-w-7xl mx-auto px-6 py-16">
        <!-- Header -->
        <section class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4 drop-shadow-lg">
                Contact
            </h1>
            <p class="text-gray-400 text-lg">
                Heb je een vraag of wil je samenwerken? Neem contact met me op!
            </p>
        </section>

        <!-- Grid -->
        <div class="grid md:grid-cols-3 gap-12">
            <!-- Contact info -->
            <section class="flex flex-col gap-8 md:col-span-1">
                <div
                    class="bg-gradient-to-br from-gray-900 to-black p-8 rounded-2xl text-center hover:-translate-y-1 transition-transform">
                    <i class="fas fa-envelope text-4xl text-red-600 mb-4"></i>
                    <h3 class="text-xl font-semibold text-white mb-2">Email</h3>
                    <a href="mailto:info@nielsdegast.nl" class="text-gray-400 hover:text-red-600 transition-colors">
                        info@nielsdegast.nl
                    </a>
                </div>

                <div
                    class="bg-gradient-to-br from-gray-900 to-black p-8 rounded-2xl text-center hover:-translate-y-1 transition-transform">
                    <i class="fab fa-discord text-4xl text-red-600 mb-4"></i>
                    <h3 class="text-xl font-semibold text-white mb-2">Discord</h3>
                    <a href="https://discord.gg/PPVBhBemSf" target="_blank"
                        class="text-gray-400 hover:text-red-600 transition-colors">
                        Join mijn server
                    </a>
                </div>

                <div
                    class="bg-gradient-to-br from-gray-900 to-black p-8 rounded-2xl text-center hover:-translate-y-1 transition-transform">
                    <i class="fab fa-youtube text-4xl text-red-600 mb-4"></i>
                    <h3 class="text-xl font-semibold text-white mb-2">YouTube</h3>
                    <a href="https://www.youtube.com/@nielsdegast" target="_blank"
                        class="text-gray-400 hover:text-red-600 transition-colors">
                        @nielsdegast
                    </a>
                </div>
            </section>

            <!-- Form -->
            <section class="md:col-span-2 bg-gradient-to-br from-gray-900 to-black p-10 rounded-2xl">
                <h2 class="text-3xl font-semibold text-white mb-8">
                    Stuur een Bericht
                </h2>

                <form method="POST" action="{{ route('contact.store') }}" class="space-y-6">
                    @csrf

                    <div>
                        <label class="block text-white mb-2">Naam</label>
                        <input type="text" name="name" required
                            class="w-full bg-[#111] border border-gray-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-red-600">
                    </div>

                    <div>
                        <label class="block text-white mb-2">Email</label>
                        <input type="email" name="email" required
                            class="w-full bg-[#111] border border-gray-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-red-600">
                    </div>

                    <div>
                        <label class="block text-white mb-2">Onderwerp</label>
                        <input type="text" name="subject" required
                            class="w-full bg-[#111] border border-gray-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-red-600">
                    </div>

                    <div>
                        <label class="block text-white mb-2">Bericht</label>
                        <textarea name="content" rows="6" required
                            class="w-full bg-[#111] border border-gray-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-red-600 resize-none"></textarea>
                    </div>

                    <button type="submit"
                        class="inline-flex items-center gap-2 bg-red-600 hover:bg-red-700 text-white px-8 py-4 rounded-lg font-semibold transition-transform hover:-translate-y-1">
                        <i class="fas fa-paper-plane"></i>
                        Verstuur Bericht
                    </button>
                </form>
            </section>
        </div>
    </main>
</x-base-layout>