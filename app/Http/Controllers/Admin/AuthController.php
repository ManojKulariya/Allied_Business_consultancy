<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function showRegisterForm()
{
    return view('admin.auth.register');
}

public function register(Request $request)
{
    // dd($request->all());
    // $request->validate([
    //     'name' => 'required|string|max:255',
    //     'email' => 'required|string|email|max:255|unique:users',
    //     'password' => 'required|string|min:8|confirmed',
    // ]);

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'is_admin' => true,
    ]);

    Auth::login($user);
    return redirect()->route('admin.dashboard');
}
  public function showLoginForm()
{
    return view('admin.auth.login');
}

public function login(Request $request)
{
    // dd($request->all());
$loginValue = $request->input('login') ?? $request->input('name');

$login_type = filter_var($loginValue, FILTER_VALIDATE_EMAIL) ? 'email' : 'name';

    $credentials = [
        $login_type => $request->login,
        'password' => $request->password,
        'is_admin' => 1,
    ];

    if (Auth::attempt($credentials, $request->remember)) {
        $request->session()->regenerate();
        return redirect()->intended(route('admin.dashboard'));
    }
// dd($credentials);
    return back()->withErrors([
        'login' => 'Invalid credentials or you are not an admin.',
    ])->onlyInput('login');
}
 
  public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }

}
