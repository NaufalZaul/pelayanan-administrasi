<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginUsers extends Controller
{
    public function index()
    {
        return view('Auth.login');
    }

    public function loginAuth(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

            $request->session()->regenerate();
            // return redirect(route('registrasi.users'));
            return redirect(url('/'));
        }

        return back()->withErrors([
            'email' => 'ini error',
        ]);

    }
}
