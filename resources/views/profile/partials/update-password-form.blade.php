<div class="card">
    <div class="card-header" id="password_change">
        <h3 class="card-title">
            Password
        </h3>
    </div>
    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')
        <div class="card-body grid gap-5">

            <div class="w-full">
                <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                    <label class="form-label max-w-56">
                        Current Password
                    </label>
                    <input class="input" name="current_password" type="password" autocomplete="current-password">
                    </input>
                    <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                </div>
            </div>
            <div class="w-full">
                <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                    <label class="form-label max-w-56">
                        New Password
                    </label>
                    <input class="input" name="password" type="password" autocomplete="new-password">
                    </input>
                    <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                </div>
            </div>
            <div class="w-full">
                <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                    <label class="form-label max-w-56">
                        Confirm New Password
                    </label>
                    <input class="input" name="password_confirmation" type="password" autocomplete="new-password" />
                    <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                    </input>
                </div>
            </div>
            <div class="flex justify-end pt-2.5">
                @if (session('status') === 'password-updated')
                    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                        class="text-sm text-gray-600">{{ __('Saved.') }}</p>
                @endif
                <button type="submit" class="btn btn-primary">
                    Save
                </button>
            </div>
        </div>
    </form>
</div>
