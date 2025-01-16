<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class userDashboardController extends Controller
{
    function dashboard(){
        if(Auth::check()){
            return view('user.dashboard');
        }
        else{
            return redirect()->route('loginPage');
        }
    }
}
