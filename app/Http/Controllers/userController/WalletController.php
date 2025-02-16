<?php

namespace App\Http\Controllers\userController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wallet;
use Auth;

class WalletController extends Controller
{
    public function index(){
        $wallet = Wallet::where('user_id', Auth::id())->get();
        $userdata = Auth::user();
        return view('user.recharge', compact('wallet','userdata'));
    }

    public function payment(Request $request){
        $request->validate([
            'balance' =>'required|numeric|min:1',
            'transaction_id' =>'required|unique:wallets,transaction_id',
        ]);
        $wallet = new Wallet();
        $wallet->user_id = Auth::id();
        $wallet->balance = $request->balance;
        $wallet->transaction_id = $request->transaction_id;
        $wallet->save();

        return redirect()->route('user.recharge')->with('success','Wallet Recharged Successfully');
    }
}
