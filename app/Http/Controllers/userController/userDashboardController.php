<?php

namespace App\Http\Controllers\userController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class userDashboardController extends Controller
{
    function dashboard(){
        $userdata = Auth::user();
        return view('user.dashboard',compact('userdata'));
    }
    
    function profile(){
        $userdata = Auth::user();
        return view('user.profile',compact('userdata'));
    }
}
