<x-guest-layout>
    <h1 class="auth-title">Verify Email</h1>
    <p class="auth-subtitle mb-5">
        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </p>


    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 text-sm text-success">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <div class="mt-4">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button class="mb-4">
                    {{ __('Resend Verification Email') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="btn btn-primary btn-lg">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>
</x-guest-layout>
