<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginPage()
    {
        return view('auth.login');
    }
    public function registerPage(){
        return view('auth.register');
    }

    public function register(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'nip' => 'nullable',
            'nis' => 'nullable',
        ]);

        $role = $request->nip ? 'guru' : 'murid';

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $role,
            'nip' => $request->nip,
            'nis' => $request->nis,
        ]);
        return redirect('/login');
    }

    public function login(Request $request){
        $credentials = $request->only('email', 'password');

       if (Auth::attempt($credentials)) {
            if (auth()->user()->role === 'guru') {
                return redirect('/guru/dashboard');
            } else {
                return redirect('/murid/dashboard');
            }
        }
        return back()->withErrors(['error' => 'Email atau password salah']);
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
