<?php

namespace App\Http\Controllers\userController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{
                User,
                Bid,
                product,
                Wallet,
            };

class viewOpenController extends Controller
{
    function livebid($id){
        $product = Product::join('product_categories','products.category_id','=','product_categories.id')
                        ->select('products.*','product_categories.name as category_name')
                        ->findOrFail($id);

        $bidHistory = Bid::where('product_id','=',$id)
                        ->join('users','bids.user_id','=','users.id')
                        ->select('bids.amount as amount','users.name as name','bids.user_id as user_id','bids.created_at as created_at','is_winner as is_winner')
                        ->orderBy('bids.amount','desc')
                        ->get();
        
        $winner = Bid::where('product_id','=',$id)->where('is_winner','=','true')
                        ->get();
        $wallet = Wallet::where('user_id','=',Auth::id())->sum('balance');
                     
        return view('user.liveBid',compact('product','bidHistory','wallet','winner'));
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
