<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function authenticate(Request $request) {

        $validated = $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required'
        ]);

        $credentials = $request->only('username', 'password');

            if(Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect('home');
            }

            return back()->withErrors([
                'error' => 'desolé, je vous reconnais pas!. reesayez :D'
        ]);
    }
}





/*

// validate inputs
        $validated = $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required'
        ]);

        if($validated) {
            // check if user exist


        }
        else { echo "faiiiiiiillllllllllllll!"; }


        // return redirect('home');

        // login user.



*/
