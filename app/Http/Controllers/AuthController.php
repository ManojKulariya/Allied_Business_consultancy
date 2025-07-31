<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class AuthController extends Controller
{
    public function showLoginForm() {
        return view('user.login');
    }

    public function login(Request $request) {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('users.my-profile'));        }

        return back()->withErrors(['email' => 'Invalid login credentials']);
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect()->route('users.login');
    }

    public function showRegisterForm() {
        return view('user.register');
    }

    public function register(Request $request) {
        $request->validate([
            'first_name' => 'required|string',
            'last_name'  => 'required|string',
            'email'      => 'required|email|unique:users,email',
            'password'   => 'required|min:6|confirmed',
        ]);

        $user = User::create([
            'name'     => $request->first_name . ' ' . $request->last_name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);
        return redirect('users.my-profile');
    }

    public function showForgotPasswordForm() {
        return view('user.reset-password');
    }

    public function sendResetLinkEmail(Request $request) {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink($request->only('email'));

        return $status == Password::RESET_LINK_SENT
            ? back()->with('status', __($status))
            : back()->withErrors(['email' => __($status)]);
    }
}

