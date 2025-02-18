<?php

namespace App\Http\Controllers\userController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wallet;
use Auth;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class WalletController extends Controller
{
    public function index(){
        $wallet = Wallet::where('user_id', Auth::id())->get();
        $userdata = Auth::user();
        $qrCode = QrCode::size(150)
                // ->color(255, 0, 0) // Red color
                // ->backgroundColor(255, 255, 0) // Yellow background
                // ->margin(10)
                ->generate('upi://pay?pa=abdulwashid25@okicici&pn=Abdul%20Washid&cu=INR&tn=Payment%20for%20Service');
        return view('user.recharge', compact('wallet','userdata','qrCode'));
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
