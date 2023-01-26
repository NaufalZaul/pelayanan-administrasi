<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrasiUsers extends Controller
{
    public function index()
    {
        return view('Auth.registrasi');
    }

    public function registrasiAuth(Request $request)
    {
        // $validate = $request->validate([
        //     'name' => 'required|max:255',
        //     'email' => 'required',
        //     'password' => 'required',
        // ]);

        // User::create($validate);

        $request->validate([
            'username' => 'required|max:255',
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = new User([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user->save();

        return redirect()->route('login')->with('success', 'Registration success. Please login!');
    }
}
