<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Hashing\BcryptHasher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function authenticate(Request $request) {

        $validated = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $request->session()->regenerate();

            return redirect('home');
        }

        return back()->withErrors([
            'error' => 'desolé, je vous reconnais pas!. reesayez :D'
        ]);
    }

    public function register(Request $request) {
        $user = new User();
        $validated = $request->validate([
            'fullname' => 'required|max:250',
            'username' => 'required|unique:users|min:5|max:20',
            'password' => 'required|confirmed|min:5|max:20'
        ]);

        if ($validated) {
            $credentials = $request;
            $credentials->password = bcrypt($request->password);

            $user::create($credentials->all());

            Auth::login($user);

            return redirect('dashboard');
        }


    }
}
