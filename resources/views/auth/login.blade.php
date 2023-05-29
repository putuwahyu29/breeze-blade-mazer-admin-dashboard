<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <h1 class="auth-title">Log in.</h1>
    <p class="auth-subtitle mb-5">Log in with your data that you entered during registration.</p>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <!-- Email Address -->
        <div class="form-group position-relative has-icon-left mb-4">
            <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus
                autocomplete="username" placeholder="Email" />
            <div class="form-control-icon">
                <i class="bi bi-person"></i>
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="form-group position-relative has-icon-left mb-4">
            <x-text-input id="password" type="password" name="password" required autocomplete="current-password"
                placeholder="Password" />
            <div class="form-control-icon">
                <i class="bi bi-shield-lock"></i>
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="form-check form-check-lg d-flex align-items-end">
            <input id="remember_me" type="checkbox" class="form-check-input me-2" name="remember">
            <label class="form-check-label text-gray-600" for="flexCheckDefault">
                Keep me logged in
            </label>
        </div>
        <x-primary-button class="mt-4">
            {{ __('Log in') }}
        </x-primary-button>
    </form>


    <div class="text-center mt-5 text-lg fs-4">
        <p class="text-gray-600">Don't have an account? <a href="{{ route('register') }}" class="font-bold">Signup</a>.
        </p>
        @if (Route::has('password.request'))
            <p><a class="font-bold" href="{{ route('password.request') }}">{{ __('Forgot password?') }}</a>.</p>
        @endif
    </div>
</x-guest-layout>
