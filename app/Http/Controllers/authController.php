<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;

class authController extends Controller
{
    function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        // dd($request->toArray());
        $credientials = array(
            'email' => $request->email,
            'password' => $request->password
        );
        // dd($credientials);
        $login = Auth::attempt($credientials);
        // dd($login);
        if(!$login){
            return redirect()->route('login')->with('error','Invalid login credientials');
        }
        else{
            return redirect()->route('admin.index');
        }
    }

}
