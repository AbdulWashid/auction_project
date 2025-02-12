<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Bid;

class findWinner implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $bid;
    protected $product_id;

    /**
     * Create a new job instance.
     */
    public function __construct($bid,$product_id)
    {
        $this->bid = $bid;
        $this->product_id = $product_id;
     
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {   
        $data = Bid::findOrFail($this->bid);
        $data->is_winner = 'yes';
        $data->save();
    }
}
