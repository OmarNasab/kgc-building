<x-guest-layout>
    <x-auth-card>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')"></x-auth-session-status>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors"></x-auth-validation-errors>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input placeholder="EMAIL" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus></x-input>
            </div>

            <!-- Password -->
            <div class="mt-8">
                <x-input placeholder="PASSWORD" id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password"></x-input>
            </div>

            <!-- Remember Me -->

            <div class="flex items-center justify-center mt-8">
                <x-button class="ml-3 w-80">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
