<section>
    <header>
        <h4>
            {{ __('Delete Account') }}
        </h4>

        <p>
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>


    <x-danger-button data-bs-toggle="modal" data-bs-target="#confirm-user-deletion">
        {{ __('Delete Account') }}
    </x-danger-button>


    <x-modal name="confirm-user-deletion">
        <x-slot name="modal_title">
            {{ __('Are you sure you want to delete your account?') }}
        </x-slot>
        <x-slot name="modal_body">
            <form method="post" action="{{ route('profile.destroy') }}">
                @csrf
                @method('delete')
                <div class="form-group position-relative has-icon-left mb-4">
                    <x-text-input id="password" name="password" type="password" placeholder="{{ __('Password') }}" />
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                    <x-input-error :messages="$errors->userDeletion->get('password')" />
                </div>
        </x-slot>
        <x-slot name="modal_footer">
            <x-secondary-button data-bs-dismiss="modal">
                {{ __('Cancel') }}
            </x-secondary-button>
            <x-danger-button class="ml-3">
                {{ __('Delete Account') }}
            </x-danger-button>
            </form>
        </x-slot>
    </x-modal>

</section>
