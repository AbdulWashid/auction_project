<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
// use DB;
use App\Models\User;

class rollCheckMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $request->validate([
            'email' => 'required|string|email|max:25',
            'password' => 'required'
        ]);
        $data = User::select('roll')->where('email','=',$request->email)->get();
        $roll = $data->toArray()[0]['roll'];
        if($roll){
            return $next($request);
        }
        // dd($request->toArray());
    }
}
