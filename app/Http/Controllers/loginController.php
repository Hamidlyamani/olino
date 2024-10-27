<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("login");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function login(Request $request)
    {
        $request->post();
       
      
          $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        // dd(Auth::attempt($credentials));
      if(Auth::attempt($credentials)){
         $request->session()->regenerate();

        return redirect()->route('cart');
      }else{
        return redirect()->back()->with('error','Email or Password is incorrect');
      }

      
    }
}

// $values = ['email' => $email, 'password' => $password];