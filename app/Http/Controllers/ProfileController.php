<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
{
    $user = $request->user();

    // Fill user with validated data
    $user->fill($request->validated());

    // Handle profile picture upload
    if ($request->hasFile('profile_pic')) {
        // Delete old profile picture if it exists
        if ($user->profile_pic) {
            $deleted = Storage::disk('students_pic')->delete($user->profile_pic);
            if (!$deleted) {
                return Redirect::route('profile.edit')->with('error', 'Old profile picture could not be deleted.');
            }
        }


        // Store new profile picture
        $file = $request->file('profile_pic');
        $path = $file->store('profile_pics', 'students_pic');
        $user->profile_pic = $path; // Assuming you have a profile_pic column in your users table
    }

    // Reset email_verified_at if email is changed
    if ($user->isDirty('email')) {
        $user->email_verified_at = null;
    }

    // Save user
    $user->save();

    // Redirect with status
    return Redirect::route('profile.edit')->with('status', 'profile-updated');
}
    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
