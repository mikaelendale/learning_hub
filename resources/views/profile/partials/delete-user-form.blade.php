
    <div class="card">
        <div class="card-header" id="del">
            <h3 class="card-title">
                Delete Account
            </h3>
        </div>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
    @csrf
    @method('delete')<div class="card-body lg:py-7.5 lg:gap-7.5 gap-5">

            <div class="flex flex-col gap-5">
                <div class="text-2sm font-medium text-gray-700">
                    We regret to see you leave. Confirm account deletion below. Your data
                    will be permanently removed. Thank you for being part of our
                    community. Please check our
                    <a class="link" target="_blank" href="https://t.me/lalo_dev_community">
                        Community
                    </a>
                    if you still wish continue.
                </div>
                <label class="checkbox-group">
                    <span class="checkbox-label">
                    </span>
                </label>
            </div>
            <div class="flex justify-end gap-2.5">
                <a class="btn btn-danger" data-modal-toggle="#delete-modal">
                    Delete Account
                </a>
            </div>
        </div>
    </div>

    <div class="modal" data-modal="true" id="delete-modal">
        <div class="modal-content max-w-[500px] top-[15%]">
            <div class="modal-header pr-2.5">
                <h3 class="modal-title">
                    Delete Account
                </h3>
                <button class="btn btn-sm btn-icon btn-light btn-clear shrink-0" data-modal-dismiss="true">
                    <i class="ki-filled ki-black-left">
                    </i>
                </button>
            </div>
            <div class="modal-body grid gap-5 px-0 py-5">
                <div class="flex flex-col px-5 gap-2.5">
                    <div class="flex flex-center gap-1">
                        <label class="text-gray-900 font-semibold text-2sm">
                            Input your password
                        </label>
                    </div>
                    <label class="input">
                        <input id="password" name="password" type="password" placeholder="{{ __('Password') }}" />
                        <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                    </label>
                </div>
                <div class="flex flex-col px-5 gap-4">
                    <button type="submit" class="btn btn-danger justify-center">
                        delete
                    </button>
                </div>
            </div>
        </div>
    </div>
</form> 
