<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }
    public function postlogin(Request $request){
        if (Auth::attempt($request->only('name','password'))) {
            return redirect('/home');
        }return redirect('/');
    }
}