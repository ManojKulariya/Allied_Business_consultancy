<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ChangePasswordRequest;
use App\Http\Requests\Admin\ProfileUpdateRequest;
use App\Traits\HasImageUpload;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class ProfileController extends Controller
{
    use HasImageUpload;

    /**
     * Show the profile page.
     */
    public function edit(Request $request): View
    {
        return view('admin.profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update profile details (name, email, phone, bio, avatar).
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = $request->user();
        $data = $request->validated();

        if ($request->hasFile('avatar')) {
            $data['avatar'] = $this->replaceFile($request->file('avatar'), $user->avatar, 'avatars');
        } else {
            unset($data['avatar']);
        }

        $user->update($data);

        return back()->with('success', 'Profile updated successfully.');
    }

    /**
     * Change the account password.
     */
    public function changePassword(ChangePasswordRequest $request): RedirectResponse
    {
        $request->user()->update([
            'password' => Hash::make($request->validated('password')),
        ]);

        return back()->with('success', 'Password changed successfully.');
    }
}
