<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Hash;
use App\Models\User;

class authController extends Controller
{
    function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        $credientials = array(
            'email' => $request->email,
            'password' => $request->password
        );

        $login = Auth::attempt($credientials);

        if(!$login){
            return redirect()->route('loginPage')->with('error','Invalid login Email and Password');
        }

        $data = Auth::user();

        if($data->roll == '1'){//admin
            return redirect()->route('admin.index');
        }
        else if($data->roll == '0'){ //user
            return redirect()->route('user.index');
        }
        else{
            return redirect()->route('loginPage')->with('error','Invalid login credientials');
        }
    }
    function logout(){
        Auth::logout();
        return redirect()->route('loginPage');
    }

    function registration(Request $request){
        $request->validate([
            'name' =>     ['required', 'min:3'],
            'mobile' =>   ['required', 'min:10','unique:users,mobile'],
            'email' =>    ['required', 'email','unique:users,email'],
            'password' => ['required', 'confirmed'],
            'password_confirmation' => ['required',],
            'terms' =>    ['required', 'accepted'],
        ],
        [
            'mobile.unique' => 'The mobile number address is already registered.',
            'email.unique' => 'The email address is already registered.',
        ]);
        $data = new user;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->mobile = $request->mobile;
        $data->password = $request->password;
        $data->save();
    }
}
