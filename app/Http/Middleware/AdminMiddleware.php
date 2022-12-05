<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()){

            //dd(Auth::user()->role->name);
            // check auth user role (I don't know how you can implement this for yourself, this is just for me)
            if(Auth::user()->role->name == 'Admin'){
                return $next($request);
            } else {
                return redirect()->route('welcome'); // for admins
            }
        }

        return redirect()->route('welcome'); // for users
    }
}
