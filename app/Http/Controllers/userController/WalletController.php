<?php

namespace App\Http\Controllers\userController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wallet;
use Razorpay\Api\Api;
use Illuminate\Support\Facades\Auth;

class WalletController extends Controller
{
    public function index() {
        $wallet = Wallet::where('user_id', Auth::id())->first();
        $userdata = Auth::user();
        
        return view('user.recharge', compact('wallet','userdata'));
    }

    public function createOrder(Request $request) {
        dd('yes');
        $api = new Api(config('razorePay.key'), config('razorePay.secret'));
        $order = $api->order->create([
            'receipt' => 'wallet_recharge_' . time(),
            'amount' => $request->amount * 100, // Convert to paisa
            'currency' => 'INR',
            'payment_capture' => 1
        ]);
        
        return response()->json(['order_id' => $order['id']]);
    }

    public function paymentSuccess(Request $request) {
        $api = new Api(config('razorePay.key'), config('razorePay.secret'));
        $payment = $api->payment->fetch($request->payment_id);

        if ($payment->status == "captured") {
            $wallet = Wallet::firstOrCreate(['user_id' => Auth::id()]);
            $wallet->balance += ($payment->amount / 100); // Convert paisa to rupees
            $wallet->save();
            dd('success');
            return response()->json(['success' => true, 'message' => 'Wallet recharged successfully!']);
        }
        dd('failed');
        return response()->json(['success' => false, 'message' => 'Payment failed!']);
    }

}
