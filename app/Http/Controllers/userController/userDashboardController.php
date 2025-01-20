<?php

namespace App\Http\Controllers\userController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class userDashboardController extends Controller
{
    function dashboard(){
        if(Auth::check() && Auth::user()->roll == '0'){
            return view('user.dashboard');
        }
        else{
            return redirect()->route('loginPage');
        }
    }
}
