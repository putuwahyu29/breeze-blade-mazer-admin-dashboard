<section>
    <header>
        <h4>
            {{ __('Update Password') }}
        </h4>

        <p>
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div class="form-group position-relative has-icon-left mb-4">
            <x-text-input id="current_password" name="current_password" type="password" class="mt-1 block w-full"
                autocomplete="current-password" placeholder="Current Password" />
            <div class="form-control-icon">
                <i class="bi bi-shield-lock"></i>
            </div>
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div class="form-group position-relative has-icon-left mb-4">
            <x-text-input id="password" name="password" type="password" class="mt-1 block w-full"
                autocomplete="new-password" placeholder="New Password" />
            <div class="form-control-icon">
                <i class="bi bi-shield-lock"></i>
            </div>
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div class="form-group position-relative has-icon-left mb-4">
            <x-text-input id="password_confirmation" name="password_confirmation" type="password"
                class="mt-1 block w-full" autocomplete="new-password" placeholder="Confirm Password" />
            <div class="form-control-icon">
                <i class="bi bi-shield-lock"></i>
            </div>
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div>
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-success">
                    {{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
