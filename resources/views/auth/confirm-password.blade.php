<x-guest-layout>
    <h1 class="auth-title">Confirm Password</h1>
    <p class="auth-subtitle mb-5">
        This is a secure area of the application. Please confirm your password before
        continuing
    </p>
    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf
        <!-- Password -->
        <div class="form-group position-relative has-icon-left mb-4">
            <x-text-input id="password" type="password" name="password" required autocomplete="current-password"
                placeholder="Password" />
            <div class="form-control-icon">
                <i class="bi bi-shield-lock"></i>
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div>
            <x-primary-button>
                {{ __('Confirm') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
