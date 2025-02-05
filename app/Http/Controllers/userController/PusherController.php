<?php

namespace App\Http\Controllers\userController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Events\MessageSent;
use Pusher\Pusher;
use App\Models\product;
use App\Models\Bid;
use Auth;

class PusherController extends Controller
{
    public function index(Request $request)
    {   
        // $product = product::findOrFail($request->productId);
        $request->validate([
            'newBid' => ['required','numeric','min:'.$request->minimumBid]
        ]);
        $data = new Bid;
        $data->product_id = $request->productId;
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
        
        // // Message data
        // $data = ['message' => 'Hello from Core PHP!'];
        
        // // Trigger event
        // $pusher->trigger('abdul-message', 'abdul-event', $data);
        
    }
}
