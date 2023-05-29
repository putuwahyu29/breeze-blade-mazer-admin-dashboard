<x-guest-layout>

    <h1 class="auth-title">Sign Up</h1>
    <p class="auth-subtitle mb-5">Input your data to register to our website.</p>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="form-group position-relative has-icon-left mb-4">
            <x-text-input id="name" type="text" name="name" :value="old('name')" required autofocus
                autocomplete="name" placeholder="Name" />
            <div class="form-control-icon">
                <i class="bi bi-person"></i>
            </div>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="form-group position-relative has-icon-left mb-4">
            <x-text-input id="email" type="email" name="email" :value="old('email')" required
                autocomplete="username" placeholder="Email" />
            <div class="form-control-icon">
                <i class="bi bi-envelope"></i>
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="form-group position-relative has-icon-left mb-4">
            <x-text-input id="password" type="password" name="password" required autocomplete="new-password"
                placeholder="New Password" />
            <div class="form-control-icon">
                <i class="bi bi-shield-lock"></i>
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="form-group position-relative has-icon-left mb-4">
            <x-text-input id="password_confirmation" type="password" name="password_confirmation" required
                autocomplete="new-password" placeholder="Confirm Password" />
            <div class="form-control-icon">
                <i class="bi bi-shield-lock"></i>
            </div>
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <x-primary-button class="mt-4">{{ __('Sign Up') }}</x-primary-button>

        <div class="text-center mt-5 text-lg fs-4">
            <p class='text-gray-600'>{{ __('Already have an account?') }}<a href="{{ route('login') }}"
                    class="font-bold">Log in</a>.</p>
        </div>
    </form>


</x-guest-layout>
