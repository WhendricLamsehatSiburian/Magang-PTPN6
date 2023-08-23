<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        
        return view('login.index',[

            'tittle' => 'Login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request -> validate([

            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
         if(Auth::attempt($credentials)){

            $request -> session()->regenerate();
            if(auth()->user()->role == 'Super Admin'){
                return redirect()->intended('/DataKaryawan');
            }
            elseif(auth()->user()->role=='Admin SDM'){
                return redirect()->intended('/ContentSDM');
            }
            elseif(auth()->user()->role=='Admin Unit Usaha'){
                return redirect()->intended('/Adminunit');
            }
            else{
                return redirect()->intended('/informasi');
            }

         }
    }

    public function logout(Request $request): RedirectResponse
{
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/');
}
}
