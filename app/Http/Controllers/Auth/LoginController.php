<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*public function index()
    {
        return view('index/index');
    }*/

    public function loginAction()
    {
        return view('index/dashboard');
    }
}
