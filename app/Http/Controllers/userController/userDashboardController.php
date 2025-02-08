<?php

namespace App\Http\Controllers\userController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Bid;
use App\Models\product;
use Illuminate\Support\Facades\Auth;


class userDashboardController extends Controller
{
    function livebid($id){
        $product = Product::join('product_categories','products.category_id','=','product_categories.id')
                        ->select('products.*','product_categories.name as category_name')
                        ->with('Bids')
                        ->findOrFail($id);
        $bidHistory = Bid::where('product_id','=',$id)
                        ->join('users','bids.user_id','=','users.id')
                        ->select('bids.amount','users.name')
                        ->orderBy('bids.amount','desc')
                        ->get();
        return view('user.liveBid',compact('product','bidHistory'));
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
