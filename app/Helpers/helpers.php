<?php

if (!function_exists('format_price')) {
    function format_price($amount)
    {
        return number_format($amount, 2);
    }
}

if (!function_exists('pusher')) {
    function pusher()
    {
        $pusher = new Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'),
            [
                'cluster' => env('PUSHER_APP_CLUSTER'),
                'useTLS' => true
            ]
        );

        return $pusher;
    }
}
