<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use App\Models\Bid;

class winnerDeclare implements ShouldQueue
{
    use Queueable;


    protected $bid_id;

    /**
     * Create a new job instance.
     */
    public function __construct($bid_id)
    {
        $this->bid_id = $bid_id;
        
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $currentBid = Bid::findOrFail($this->bid_id);

        $highestBid = Bid::where('product_id','=', $currentBid->product_id)
                            ->max('amount');
        
        if($currentBid->amount == $highestBid){
            $currentBid->is_winner = 'true';
            $currentBid->save();

            pusher()->trigger('winnerChannel_'.$currentBid->product_id, 'winnerEvent_'.$currentBid->product_id, $currentBid);
        }
        else{
            return;
        }
    
    }
}
