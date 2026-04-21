<x-guest-layout>

    <div class="min-h-screen flex items-center justify-center bg-white">

        <div class="w-full max-w-sm border border-red-500 rounded-2xl p-8 shadow-sm">

            <h2 class="text-2xl font-semibold text-center text-red-500 mb-6">
                Crear cuenta
            </h2>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Nombre -->
                <div>
                    <x-input-label for="name" :value="__('Name')" class="text-gray-700"/>
                    <x-text-input id="name"
                        class="block mt-1 w-full rounded-lg border-gray-300 focus:border-red-500 focus:ring-red-500"
                        type="text"
                        name="name"
                        :value="old('name')"
                        required autofocus />
                    <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-500" />
                </div>

                <!-- Email -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" class="text-gray-700"/>
                    <x-text-input id="email"
                        class="block mt-1 w-full rounded-lg border-gray-300 focus:border-red-500 focus:ring-red-500"
                        type="email"
                        name="email"
                        :value="old('email')"
                        required />
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

                <!-- Confirm -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-gray-700"/>
                    <x-text-input id="password_confirmation"
                        class="block mt-1 w-full rounded-lg border-gray-300 focus:border-red-500 focus:ring-red-500"
                        type="password"
                        name="password_confirmation"
                        required />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-500" />
                </div>

                <!-- Botón -->
                <div class="mt-6">
                    <x-primary-button class="w-full justify-center bg-red-500 hover:bg-red-600">
                        Registrarse
                    </x-primary-button>
                </div>

                <!-- Link -->
                <div class="text-center mt-4 text-sm">
                    <a href="{{ route('login') }}" class="text-red-500 hover:underline">
                        ¿Ya tienes cuenta?
                    </a>
                </div>

            </form>

        </div>
    </div>

</x-guest-layout>