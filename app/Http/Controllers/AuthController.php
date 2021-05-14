<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Hashing\BcryptHasher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function authenticate(Request $request) {

        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('username', 'password');

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('home');
        } else {
            return back()->withErrors([
                'error' => 'desolé, je vous reconnais pas!. reesayez :D'
            ]);
        }
    }

    public function register(Request $request) {
        $user = new User();
        $validated = $request->validate([
            'fullname' => 'required|max:250',
            'username' => 'required|unique:users|min:5|max:20',
            'password' => 'required|confirmed|min:5|max:20'
        ]);

        if ($validated) {
            $credentials = $request->all();

            $credentials['password'] = Hash::make($request->password);

            $user::create($credentials);

            Auth::login($user);

            return redirect('dashboard');
        }
    }
}
