<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function home(){
        return view('auth.home');
    }

    public function showLoginform(){
        return view('auth.login');
    }

    public function login(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'

        ],[    
            'email.required'=>'Email Wajib Di isi',
            'password.required'=>'Password wajib Di isi',
        ]);

        $infologin = [
            'email'=> $request->email,
            'password'=> $request->password,
        ];

        if (Auth::attempt($infologin)){
            if(Auth::user()->role == 'gurubk'){
                return redirect('admn/gurubk');
            }elseif (Auth::user()->role == 'gurupengajar'){
                return redirect('admn/gurupengajar');
            }
        }else{
            return redirect('dashboard')->withErrors('Username dan password yang dimasukan tidak sesuai')->withInput();
        }
    }


    function logout(){
        Auth::logout();
        return redirect('/login');
    }
}