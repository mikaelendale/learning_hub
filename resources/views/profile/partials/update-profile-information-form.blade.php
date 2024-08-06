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
        @method('patch')
        <div class="card-body grid gap-5">
            <div class="flex items-center flex-wrap gap-2.5">
                <label class="form-label max-w-56">Photo</label>
                <div class="flex items-center justify-between flex-wrap grow gap-2.5">
                    <span class="text-2sm font-medium text-gray-600">150x150px JPEG, PNG Image</span>
                    <div class="image-input size-16" data-image-input="true">
                        <input  name="profile" type="file" />
                        <div class="btn btn-icon btn-icon-xs btn-light shadow-default absolute z-1 size-5 -top-0.5 -right-0.5 rounded-full"
                            data-image-input-remove="" data-tooltip="#image_input_tooltip" data-tooltip-trigger="hover">
                            <i class="ki-filled ki-cross"></i>
                        </div>
                        <span class="tooltip" id="image_input_tooltip">Click to remove or revert</span>
                        <div class="image-input-placeholder rounded-full border-2 border-success image-input-empty:border-gray-300"
                            style="background-image:url(assets/media/avatars/blank.png)">
                            <div class="image-input-preview rounded-full"
                                style="background-image:url(students_pic/{{ $user->profile }})"></div>
                            <div
                                class="flex items-center justify-center cursor-pointer h-5 left-0 right-0 bottom-0 bg-dark-clarity absolute">
                                <svg class="fill-light opacity-80" height="12" viewBox="0 0 14 12" width="14"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.6665 2.64585H11.2232C11.0873 2.64749 10.9538 2.61053 10.8382 2.53928C10.7225 2.46803 10.6295 2.36541 10.5698 2.24335L10.0448 1.19918C9.91266 0.931853 9.70808 0.707007 9.45438 0.550249C9.20068 0.393491 8.90806 0.311121 8.60984 0.312517H5.38984C5.09162 0.311121 4.799 0.393491 4.5453 0.550249C4.2916 0.707007 4.08701 0.931853 3.95484 1.19918L3.42984 2.24335C3.37021 2.36541 3.27716 2.46803 3.1615 2.53928C3.04584 2.61053 2.91234 2.64749 2.7765 2.64585H2.33317C1.90772 2.64585 1.49969 2.81486 1.19885 3.1157C0.898014 3.41654 0.729004 3.82457 0.729004 4.25002V10.0834C0.729004 10.5088 0.898014 10.9168 1.19885 11.2177C1.49969 11.5185 1.90772 11.6875 2.33317 11.6875H11.6665C12.092 11.6875 12.5 11.5185 12.8008 11.2177C13.1017 10.9168 13.2707 10.5088 13.2707 10.0834V4.25002C13.2707 3.82457 13.1017 3.41654 12.8008 3.1157C12.5 2.81486 12.092 2.64585 11.6665 2.64585ZM6.99984 9.64585C6.39413 9.64585 5.80203 9.46624 5.2984 9.12973C4.79478 8.79321 4.40225 8.31492 4.17046 7.75532C3.93866 7.19572 3.87802 6.57995 3.99618 5.98589C4.11435 5.39182 4.40602 4.84613 4.83432 4.41784C5.26262 3.98954 5.80831 3.69786 6.40237 3.5797C6.99644 3.46153 7.61221 3.52218 8.1718 3.75397C8.7314 3.98576 9.2097 4.37829 9.54621 4.88192C9.88272 5.38554 10.0623 5.97765 10.0623 6.58335C10.0608 7.3951 9.73765 8.17317 9.16365 8.74716C8.58965 9.32116 7.81159 9.64431 6.99984 9.64585Z"
                                        fill=""></path>
                                    <path
                                        d="M7 8.77087C8.20812 8.77087 9.1875 7.7915 9.1875 6.58337C9.1875 5.37525 8.20812 4.39587 7 4.39587C5.79188 4.39587 4.8125 5.37525 4.8125 6.58337C4.8125 7.7915 5.79188 8.77087 7 8.77087Z"
                                        fill=""></path>
                                </svg>
                            </div>
                        </div>
                    </div>
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
