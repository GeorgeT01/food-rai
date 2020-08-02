<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        if(Auth::check()){
            return redirect('/');
        }
        return view('user.auth.login');
    }
    
    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|max:255',
            'password' => 'required',
        ]);
        $remember = isset($request->remember) ? true : false;
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember)){
            return redirect()->route('home');
        }
        return back()->withInput($request->all())->with('error', 'Worng email or password');
    }
}
