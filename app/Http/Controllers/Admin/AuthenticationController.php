<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\UpdateProfileRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Models\User;



class AuthenticationController extends Controller
{
    public function showLogin()
    {
        return view('backend.auth.login');
    }

    public function handleLogin(LoginRequest $request)
    {

        $login = $request->only('email', 'password');

        if (Auth::attempt($login))
        {
            toastr()->success('Uğurla daxil oldunuz');

            return redirect()->route('admin.dashboard');
        }
        else
        {
            toastr()->error('Xəta');

            return redirect()->back();
        }
    }

    public function editProfile()
    {
        $user = User::find(1);

        return view('backend.auth.profile', compact('user'));
    }

    public function updateProfile(UpdateProfileRequest $request)
    {
        $previous_image = $request->previous_image;

        $user = User::findOrFail(1);
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $imageName = rand(1, 1000) . time() . $request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/users/'), $imageName);
            $validated['image'] = $imageName;

            if (file_exists($previous_image))
            {
                unlink($previous_image);
            }
        }

        $user->update($validated);

        toastr()->success('Profil Uğurla yenililəndi');

        return redirect()->back();

    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        toastr()->success('Çıxış etdiniz');

        return redirect()->route('admin.showLogin');
    }

}
