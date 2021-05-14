<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{

    /**
     *
     * home page function!
     */
    public function index(Request $request) {
        return view('client.home')->with('user', $request->user());
    }

    public function login(Request $request) {
        return view('admin.login')->with('user', $request->user());
    }

    public function about(Request $request) {
        return view('client.about')->with('user', $request->user());
    }

    public function dashboard(Request $request) {
        return view('admin.dashboard')->with('user', $request->user());
    }

    public function create(Request $request) {
        return view('client.form')->with('user', $request->user());
    }
}
