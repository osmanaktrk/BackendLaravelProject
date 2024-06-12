<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;
use Illuminate\Support\Facades\File;


class ProfileController extends Controller
{

    public function userInfo(Request $request){
        $validated = $request->validate([
            'avatar' => ['required', 'image', 'max:10240'],
            'birthday' => ['required', 'date'],
            'about' =>['required', 'min:5'],

        ]);

        $avatarName = Auth::user()->email;
        $avatarExt = $validated['avatar']->getClientOriginalExtension();
        $avatar = $avatarName.'.'.$avatarExt;
        $validated['avatar']->move(public_path('img/avatars/'), $avatar);
        $user = User::findOrFail(Auth::user()->id);
        $user->avatar = 'img/avatars/'.$avatar;
        $user->birthday = $validated['birthday'];
        $user->about = $validated['about'];
        $user->save();

        return redirect()->route('profile.info')->with('status', 'PROFILE INFORMATIONS SAVED');

    }

    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'PROFILE UPDATED');
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
        
        File::delete($user->avatar);
        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
