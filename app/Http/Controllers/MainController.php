<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{


    /**
     *
     * home page function!
     */
    public function index() {
        return view('client.home');
    }

    public function login() {
        return view('admin.login');
    }
}
