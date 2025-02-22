<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
class AuthController extends Controller
{
    public function login(){
        // echo hash::make('admin1234');
        return view('auth.login');
    }

    public function auth_login(Request $request){
        // dd($request->all());

        $remember=!empty($request->remember)? true:false;

        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password],$remember)){
            return redirect('panel/dashboard');
        }else{
            return redirect()->back()->with('error','الرجاء إدخال البريد الإلكتروني وكلمة المرور الصحيحة');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect(url(''));
    }
}