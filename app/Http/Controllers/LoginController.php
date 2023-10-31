<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    function login() : View {
        // render login page
        return view('authentication/login');
    }

    function register() : View {
        // login register page
        return view('authentication/register');
    }

    public function storeRegister(Request $request) {
        $nama = $request->nama;
        $email = $request->email;
        $password = $request->password;
        $role = $request->role;

        $user = User::create([
            'name'      => $nama,
            'email'     => $email,
            'password'  => $password,
            'role'      => $role,
        ]);
        return redirect()->route('login')->with('success','Pendaftaran Berhasil, Silahkan Login');
    }

    /**
     * Handle an authentication attempt.
     */
    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    /**
     * logout req
     */
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
