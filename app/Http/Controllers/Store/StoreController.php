<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    //
    function __construct()
    {
        $this->middleware('auth:store' , ['except' => ['index'] ]);
    }

    public function index()
    {
        if(Auth::guard('store')){
            
        }
        return view('store.auth.index');
    }
}
