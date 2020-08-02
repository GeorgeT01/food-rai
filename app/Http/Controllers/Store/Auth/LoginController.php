<?php

namespace App\Http\Controllers\Store\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index(){
        if(Auth::guard('store')){

        }
        return view('store.auth.index');
    }

    public function showLoginForm(){
        if(Auth::guard('store')){

        }
        return view('store.auth.login');
    }
}
