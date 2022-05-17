<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class userController extends Controller
{
   public function halamanRegister(){
       return view ('pages.register');
   }
public function simpanUser(Request $request){
    $validator = Validator::make($request->all(), [
        'nama' => 'required',
        'nik' => 'required|digits:16|unique:users,email',
    ]);

    if ($validator->fails()) {
        return redirect()->route('register')->with('registerFailed', 'Registrasi tidak berhasil');
    }


    $data=[
        'nama'=>$request->nama,
        'email'=>$request->nik,
        'password'=>bcrypt($request->nik)
    ];
    User::create($data);
    // return redirect()->route('login')->with('registerSuccess', 'Register Berhasil');
    return redirect()->route('halamanlogin')->with('registerSuccess', 'Registrasi berhasil');
}  
}
