<?php

namespace App\Http\Controllers\userController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Pusher\Pusher;
use App\Models\product;
use App\Models\Bid;
use Auth;

class PusherController extends Controller
{
    public function index(Request $request,$id)
    {  
        $product = product::select('bid_start_price')->find($id);
        $highBid = Bid::where('product_id','=',$id)->max('amount');
        $highestBid = $highBid ? $highBid : $product;
        $highestBid = $highestBid + $highestBid*5/100;
         // Request validation
        $request->validate([
            'newBid' => ['required','numeric','min:'.$highestBid]
        ]);
        
        // data store in db
        $data = new Bid;
        $data->product_id = $id;
        $data->user_id = Auth::id();
        $data->amount = $request->newBid;
        $data->save();

        // pusher setup start
        $options = [
            'cluster' => env('PUSHER_APP_CLUSTER'),
            'useTLS' => true
        ];
        
        $pusher = new Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'),
            $options
        );
        

        // bidder data
        $bidder = [
            'name' => Auth::user()->name,
            'amount' => $request->newBid
        ];
        
        // Trigger event
        $pusher->trigger('liveBidChannel'.$id, 'liveBidEvent'.$id, $bidder);
        return redirect()->back()->with('success','bid register successfully');
    }
}
