<?php

namespace App\Http\Controllers\userController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\product;
use Illuminate\Support\Facades\Auth;


class userDashboardController extends Controller
{
    function livebid($id){
        $product = Product::join('product_categories','products.category_id','=','product_categories.id')
                        ->select('products.*','product_categories.name as category_name')
                        ->with('Bids')
                        ->findOrFail($id);

        return view('user.liveBid',compact('product'));
    }

    function dashboard(){
        $userdata = Auth::user();
        return view('user.dashboard',compact('userdata'));
    }
    
    function profile(){
        $userdata = Auth::user();
        return view('user.profile',compact('userdata'));
    }

    function recharge(){
        $userdata = Auth::user();
        return view('user.recharge',compact('userdata'));
    }
}
