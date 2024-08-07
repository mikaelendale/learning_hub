<div class="card pb-2.5">
    <div class="card-header" id="basic_settings">
        <h3 class="card-title">
            Basic Settings
        </h3>
    </div>
    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>
    <form method="post" action="{{ route('profile.update') }}"  enctype="multipart/form-data" class="mt-6 space-y-6">
        @csrf
        @method('PATCH')
        <div class="card-body grid gap-5">
            <div class="w-full">
                <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                    <label class="form-label flex items-center gap-1 max-w-56">
                        Profile pic
                    </label>
                    <input class="input" name="profile_pic" type="file"
                        autocomplete="pic" />
                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                </div>
            </div>
            <div class="w-full">
                <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                    <label class="form-label flex items-center gap-1 max-w-56">
                        Name
                    </label>
                    <input class="input" name="name" type="text" value="{{ old('name', $user->name) }}" required
                        autocomplete="name" />
                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                </div>
            </div>
            <div class="w-full">
                <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                    <label class="form-label flex items-center gap-1 max-w-56">
                        Email
                    </label>
                    <input class="input" name="email" type="email" value="{{ old('email', $user->email) }}"
                        autocomplete="username" />
                    <x-input-error class="mt-2" :messages="$errors->get('email')" />
                </div>
            </div>

            <div class="flex items-center flex-wrap gap-2.5">
                <label class="form-label max-w-56">
                    Gender
                </label>
                <div class="grow">
                    <select class="select" name="gender">
                        <option value="male" {{ old('gender', $user->gender) == 'male' ? 'selected' : '' }}>
                            Male
                        </option>
                        <option value="female" {{ old('gender', $user->gender) == 'female' ? 'selected' : '' }}>
                            Female
                        </option>
                    </select>
                </div>
            </div>
            <div class="w-full">
                <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                    <label class="form-label flex items-center gap-1 max-w-56">
                        Phone number
                    </label>
                    <input class="input" name="phone_no" type="number" value="{{ old('email', $user->phone_no) }}"
                        autocomplete="tel" />
                </div>
            </div>
            <div class="w-full">
                <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                    <label class="form-label flex items-center gap-1 max-w-56">
                        Telegram Username as https://t.me/yourusername
                    </label>
                    <input class="input" name="telegram_username" type="text"
                        value="{{ old('email', $user->telegram_username) }}" autocomplete="telegram" />
                </div>
            </div>
            <div class="w-full">
                <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                    <label class="form-label flex items-center gap-1 max-w-56">
                        Address
                    </label>
                    <input class="input" name="address" type="text" value="{{ old('email', $user->address) }}"
                        autocomplete="address" />
                </div>
            </div>
            <div class="flex items-center flex-wrap gap-2.5">
                <label class="form-label max-w-56">
                    Notifications
                </label>
                <div class="grow">
                    <select class="select" name="notification">
                        <option value="on" {{ old('notification', $user->notification) == 'on' ? 'selected' : '' }}>
                            on
                        </option>
                        <option value="off"
                            {{ old('notification', $user->notification) == 'off' ? 'selected' : '' }}>
                            off
                        </option>
                    </select>
                </div>
            </div>
            <div class="flex justify-end pt-2.5">
                @if (session('status') === 'profile-updated')
                    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                        class="text-sm text-gray-600">{{ __('Saved.') }}</p>
                @endif
                <button type="submit" class="btn btn-primary">
                    Save Changes
                </button>

            </div>
        </div>
    </form>
</div>
{{-- <section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)"
                required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)"
                required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />


        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>


        </div>
    </form>
</section> --}}
