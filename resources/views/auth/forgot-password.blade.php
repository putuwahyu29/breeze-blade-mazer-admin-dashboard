<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <h1 class="auth-title">Forgot Password</h1>
    <p class="auth-subtitle mb-5">Input your email and we will send you reset password link.</p>

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div class="form-group position-relative has-icon-left mb-4">
            <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus  placeholder="Email"/>
            <div class="form-control-icon">
                <i class="bi bi-envelope"></i>
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div>
            <x-primary-button>
                {{ __('Send') }}
            </x-primary-button>
        </div>

    </form>
    <div class="text-center mt-5 text-lg fs-4">
        <p class='text-gray-600'>Remember your account? <a href="{{ route('login') }}" class="font-bold">Log in</a>.
        </p>
    </div>
</x-guest-layout>
