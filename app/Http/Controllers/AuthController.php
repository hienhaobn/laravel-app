<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('clients.login');
    }

    public function postLogin(Request $request)
    {

    }

    public function getRegister()
    {
        return view('clients.register');
    }

    public function postRegister(Request $request)
    {
        dd($request);
    }
}
