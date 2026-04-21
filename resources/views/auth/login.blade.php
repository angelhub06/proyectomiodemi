<x-guest-layout>

    <div class="min-h-screen flex items-center justify-center bg-white">

        <div class="w-full max-w-sm border border-red-500 rounded-2xl p-8 shadow-sm">

            <!-- Título -->
            <h2 class="text-2xl font-semibold text-center text-red-500 mb-6">
                Iniciar sesión
            </h2>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4 text-center text-sm text-green-600" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <div>
                    <x-input-label for="email" :value="__('Email')" class="text-gray-700"/>
                    <x-text-input id="email"
                        class="block mt-1 w-full rounded-lg border-gray-300 focus:border-red-500 focus:ring-red-500"
                        type="email"
                        name="email"
                        :value="old('email')"
                        required autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" class="text-gray-700"/>
                    <x-text-input id="password"
                        class="block mt-1 w-full rounded-lg border-gray-300 focus:border-red-500 focus:ring-red-500"
                        type="password"
                        name="password"
                        required />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
                </div>

                <!-- Remember -->
                <div class="block mt-4">
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="remember"
                            class="rounded border-gray-300 text-red-500 focus:ring-red-500">
                        <span class="ms-2 text-sm text-gray-600">Recordarme</span>
                    </label>
                </div>

                <!-- Botón -->
                <div class="mt-6">
                    <x-primary-button class="w-full justify-center bg-red-500 hover:bg-red-600 focus:bg-red-600">
                        Iniciar sesión
                    </x-primary-button>
                </div>

                <!-- Links -->
                <div class="text-center mt-4 text-sm">
                    <a href="{{ route('register') }}" class="text-red-500 hover:underline">
                        Crear cuenta
                    </a>
                </div>

            </form>
        </div>
    </div>

</x-guest-layout>