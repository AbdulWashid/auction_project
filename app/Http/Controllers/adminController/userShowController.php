<?php

namespace App\Http\Controllers\adminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class userShowController extends Controller
{
    function show(){
        $data = User::orderBy('id','desc')->get();
        return view('Admin.userTable',compact('data'));
    }
}
