<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function login(){
        return view("user.login");
    }
    public function authenticate(Request $request){
        $formFields = $request->validate([
            'username' => ['required'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();
            return view("user.adminLanding");
        } else {
            return back()->withInput()->withErrors([
                'username' => 'Invalid username or password',
            ]);
        }

    }
}
