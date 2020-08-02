<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    //

    public function index()
    {
        if(Auth::check()){
            return redirect('/');
        }
        return view('user.auth.register');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|unique:users|max:255',
            'password' => 'required|between:6,255|confirmed',
            'country' => 'required|max:255',
            'city' => 'required|max:255',
            'delivery_address' => 'required|max:255',
        ]);

        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->middle_name = $request->middle_name;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->country = $request->country;
        $user->city = $request->city;
        $user->delivery_address = $request->delivery_address;
        $user->password = bcrypt($request->password);
        
        if($user->save()){
            Auth::loginUsingId($user->id);
            return redirect()->route('home');
        }
        return back()->withInput($request->all());

    }
    

}
