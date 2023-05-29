<section>
    <header>
        <h4>
            {{ __('Profile Information') }}
        </h4>

        <p>
            {{ __('Update your accounts profile information and email address.') }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div class="form-group position-relative has-icon-left mb-4">
            <x-text-input id="name" name="name" type="text" :value="old('name', $user->name)" placeholder="Name" required
                autofocus autocomplete="name" />
            <div class="form-control-icon">
                <i class="bi bi-person"></i>
            </div>
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div class="form-group position-relative has-icon-left mb-4">
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)"
                required autocomplete="username" placeholder="Email" />
            <div class="form-control-icon">
                <i class="bi bi-envelope"></i>
            </div>
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                <div>
                    <p class="text-danger">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="btn btn-link text-decoration-none">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="text-success">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div>
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-success">
                    {{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
