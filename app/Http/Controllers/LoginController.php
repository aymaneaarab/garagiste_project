<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function login (Request $request){
        // $values=$request->post();
        $email = $request->email;
        $password = $request->password;
        $credentials = ['email'=>$email , 'password'=>$password];
        if (Auth::attempt($credentials)){
            $request ->session()->regenerate();
            // $name = session('name');
            $user = Auth::user();
            $name = $user->username;
            return redirect()->route('dashboard')->with('name',$name);


        }
        else{
            return back()->withErrors(['email'=>"Email or password are  false"])->onlyInput('email');
        }
    }
}
