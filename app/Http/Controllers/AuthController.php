<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Session;
use Validator;
use Hash;

class AuthController extends Controller
{
    public function showFormLogin()
    {
        if (Auth::check()) {
            return redirect()->route('home');
        }
        else {
            return view('authentication/login');
        }
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
        }

        if (Auth::check()) { // true sekalian session field di users nanti bisa dipanggil via Auth
            //Login Success
            return redirect()->route('home');
  
        } else { // false
            dump($credentials);
  
            //Login Fail
            Session::flush();
            die;
            return redirect()->route('login');
        }
    }

    
    public function logout()
    {
        Auth::logout(); // menghapus session yang aktif
        return redirect()->route('login');
    }
    
}
