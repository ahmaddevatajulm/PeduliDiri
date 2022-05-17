<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class loginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function halamanlogin(){
        return view ('pages.login');
    }
    public function login(Request $request){
        if(Auth::attempt($request->only('nama','email','password'))){
            return view('pages.home');
        }
        return redirect('/login')->with('loginFailed', 'login gagal|NIK dan nama tidak ditemukan');
        }
        
        public function logout(){
            Auth::logout();
            return redirect('/login');
        }
    }