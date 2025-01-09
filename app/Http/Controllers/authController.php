<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;
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
        $data = User::where('id','=',Auth::id())->first();
        if($data->roll == '1'){//admin
            return redirect()->route('admin.index');
        }
        else if($data->roll == '0'){
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

}
