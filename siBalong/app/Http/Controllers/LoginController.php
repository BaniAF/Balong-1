<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Akun;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller {
    public function showLoginForm(){
        return view('pages.login');
    }

    public function login(Request $request) {
        $credentials = $request->only('username', 'userpass');

        // Validasi username
        $user = Akun::where('username', $credentials['username'])->first();
        if (!$user) {
            $error = 'Username tidak ditemukan.';
            return redirect()->back()->withErrors(['message' => $error]);
        }

        // Validasi password
        if ($credentials['userpass'] !== $user->userpass) {
            $error = 'Password salah.';
            return redirect()->back()->withErrors(['message' => $error]);
        }

        // Autentikasi berhasil
        Auth::login($user);
        toast('Login Berhasil', 'success');
        return redirect()->intended('/');
    }


    public function logout() {
        Auth::logout();
        return redirect('/login');
    }
}
