<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    //dashboard view
    public function index(){
        return view('pages.dashboard');
    }
    //login page view
    public function loginView(){
        return view('auth.login');
    }

    //login with auth helper

    public function AdminLogin(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',

        ]);
        if(auth()->attempt(request()->only(['email','password']))){
           return redirect('/');
        }
        else{
            return redirect()->route('loginpage')->with(['error'=>'email or password are invalid']);
        }
    }
    public function AdminLogout(){
        auth()->logout();
        return redirect()->route('loginpage');
    }
}
