<?php

namespace App\Http\Controllers\userController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Jobs\winnerDeclare;
use Carbon\Carbon;
use App\Models\{
                product,
                Bid,
                Wallet
                };


class PusherController extends Controller
{
    public function index(Request $request,$id)
    {  
        // get highest bid
        $product = product::select('bid_start_price')->find($id);
        $highBid = Bid::where('product_id','=',$id)->max('amount');
        $highestBid = $highBid ? $highBid : $product->bid_start_price;
        $highestBid = round($highestBid + ($highestBid * 0.05));

         // Request validation
        $request->validate([
            'newBid' => ['required','numeric','min:'.$highestBid]
        ]);

        // check user balance
        $user = Wallet::where('user_id','=',Auth::id())->sum('balance');
        if($request->newBid > $user/2){
            return redirect()->back()->with('error','Please Recharge wallet');
        }
        
        // data store in db
        $bid = new Bid;
        $bid->product_id = $id;
        $bid->user_id = Auth::id();
        $bid->amount = round($request->newBid);
        $bid->save();

        // bidder data for pusher
        $bidder = [
            'name' => Auth::user()->name,
            'amount' => round($request->newBid),
            'created_at' => Carbon::parse($bid->created_at)->addSeconds(30)->toIso8601String()
        ];

        // pusher trigger
        pusher()->trigger('liveBidChannel'.$id, 'liveBidEvent'.$id, $bidder);

        // jobs work
        winnerDeclare::dispatch($bid->id)
                        ->delay($bid->created_at->addSeconds(30))
                        ->onQueue('default');


        return redirect()->back()->with('success','bid register successfully');
    }
}
