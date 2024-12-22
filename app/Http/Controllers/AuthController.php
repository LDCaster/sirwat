<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        return view('auth.login', [
            'title' => 'Login',
        ]);
    }
    public function register()
    {
        return view('auth.register', [
            'title' => 'Register',
        ]);
    }
}
