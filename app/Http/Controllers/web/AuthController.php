<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session as FacadesSession;


class AuthController extends Controller
{

    public function authenticate(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        // dd($username, $password);

        Auth::attempt(['username' => $username, 'password' => $password]);
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->role !== 1) {
                FacadesSession::flash('error', 'Anda tidak memiliki akses');
                return redirect()->route('login')->withInput();
            }

            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }
        FacadesSession::flash('error', 'Username atau password salah');
        return redirect()->route('login')->withInput();
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function forbidden()
    {
        return view('web.errors.403');
    }
}
