<x-guest-layout>
    <div class="mb-3 text-center">
        <h2 class="text-2xl font-semibold text-gray-800 ">
            Create an Account
        </h2>
    </div>

    <form method="POST" action="{{ route('register') }}" class="space-y-2">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Full Name')" />
            <x-text-input id="name"
                class="block mt-1 w-full rounded-md border-gray-300 bg-orange-100  focus:ring-orange-500 focus:border-orange-500"
                type="text"
                name="name"
                :value="old('name')"
                required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email -->
        <div>
            <x-input-label for="email" :value="__('Email Address')" />
            <x-text-input id="email"
                class="block mt-1 w-full rounded-md border-gray-300 bg-orange-100 focus:ring-orange-500 focus:border-orange-500"
                type="email"
                name="email"
                :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password"
                class="block mt-1 w-full rounded-md border-gray-300 bg-orange-100 focus:ring-orange-500 focus:border-orange-500"
                type="password"
                name="password"
                required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div>
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation"
                class="block mt-1 w-full rounded-md border-gray-300 bg-orange-100 focus:ring-orange-500 focus:border-orange-500"
                type="password"
                name="password_confirmation"
                required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Submit -->
        <div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-2">
            <a href="{{ route('login') }}"
                class="text-sm text-gray-600 dark:text-gray-400 hover:text-orange-500 transition">
                Already registered?
            </a>

            <x-primary-button class="w-full sm:w-auto justify-center bg-orange-500 hover:bg-orange-600 focus:ring-orange-500">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
