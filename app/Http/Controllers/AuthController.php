<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;

class AuthController extends Controller
{
    public function registrcode(Request $req)
    {
        $req->validate([
            'name'      => 'required',
            'surname'   => 'required',
            'login'     => 'required',
            'password'  => 'required',
        ]);

     if($req->parol==$req->parol2){   
        $user             = new user;
        $user->name       = $req->name;
        $user->surname    = $req->surname; 
        $user->login      = $req->login;
        $user->parol      = Hash::make($req->parol);
        $user->save();
//        return redirect('admin')->with('xabar', "Yangi foydalanuvchi qo'shildi!");
     }else{
         return redirect()->back()->with('error', "Parollar birxil emas!");
     }

    }

// Login va parol sahifasiga yunaltirish    
    public function login()
    {
        return view('login');
    }

//  Login va parolni tekshirish    

    public function checklogin(Request $req)
    {
        $req->validate([
            'login'    => 'required',
            'password' => 'required',
        ]);

        $user = user::where('login', '=', $req->login)->first();
        if(empty($user)){
            return redirect('login')->with('error', "Login xato!");
        }

        if(Hash::check($req->password, $user->password)){
                Session::put('user_id',$user->id);
                return redirect('admin');
        }else{
            return redirect()->back()->with('error', "Parol xato!");
        }

    }

    public function admin()
    {
        $user = user::find(Session::get('user_id'));
        if(empty($user)){
            return redirect('login')->with('error', "Hakkerlik qilmang!");
        }
        return view('layouts.admin');
    }

}
