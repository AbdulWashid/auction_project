<?php

namespace App\Http\Middleware\User;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserRollCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!Auth::check()){
            return redirect()->route('loginPage');
        }

        $data = User::where('id','=',Auth::id())->first();
        if($data->roll == '0'){ // 1 for admin and 0 for user
            return $next($request);
        }
        else{
            return redirect()->back();
        }
    }
}
