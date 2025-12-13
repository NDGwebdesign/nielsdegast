<x-guest-layout>
    <!-- Hero / Header -->
    <div class="text-center mb-8">
        <h1 class="text-4xl md:text-5xl font-bold text-white drop-shadow-lg">Admin Login</h1>
        <p class="text-gray-300 mt-2">Voer je gegevens in om in te loggen</p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4 text-red-500 font-semibold" :status="session('status')" />

    <!-- Login Form -->
    <form method="POST" action="{{ route('login') }}" class="space-y-6">
        @csrf

        <!-- Email -->
        <div>
            <label for="email" class="block text-gray-200 font-medium mb-1">Email</label>
            <input id="email" type="email" name="email" :value="old('email')" required autofocus
                class="w-full px-4 py-2 rounded-xl bg-gray-900 border border-gray-700 text-white focus:border-red-600 focus:ring-red-600 focus:ring-1">
            <x-input-error :messages="$errors->get('email')" class="mt-1 text-red-500" />
        </div>

        <!-- Password -->
        <div>
            <label for="password" class="block text-gray-200 font-medium mb-1">Password</label>
            <input id="password" type="password" name="password" required
                class="w-full px-4 py-2 rounded-xl bg-gray-900 border border-gray-700 text-white focus:border-red-600 focus:ring-red-600 focus:ring-1">
            <x-input-error :messages="$errors->get('password')" class="mt-1 text-red-500" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center">
            <input id="remember_me" type="checkbox"
                class="rounded border-gray-700 text-red-600 focus:ring-red-500 bg-gray-800">
            <label for="remember_me" class="ml-2 text-gray-300 text-sm">Remember me</label>
        </div>

        <!-- Actions -->
        <div class="flex flex-col md:flex-row md:justify-between items-center gap-4 mt-6">
            @if (Route::has('password.request'))
                <a class="text-sm text-gray-400 hover:text-red-600 underline" href="{{ route('password.request') }}">
                    Forgot your password?
                </a>
            @endif

            <button type="submit"
                class="bg-red-600 hover:bg-red-700 px-6 py-3 rounded-full font-semibold text-white transition-transform transform hover:-translate-y-1 shadow-lg">
                Log in
            </button>
        </div>
    </form>
</x-guest-layout>
