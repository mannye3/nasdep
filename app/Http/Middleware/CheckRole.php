<?php

namespace App\Http\Middleware;

use Closure;

use Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check() == false || Auth::user()->member_type == 1)
        {
            return redirect('/');
        }

        if(Auth::check() == true &&  Auth::user()->member_type == 2)
        {

            return response()->view('investor/dashboard');


        }


        if(Auth::check() == false || Auth::user()->member_type == 3)
        {
            return redirect('/');
        }


        if(Auth::check() == false || Auth::user()->member_type == 4)
        {
            return redirect('/');
        }
        return $next($request);
    }
}
