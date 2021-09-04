<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Parents
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
        if(Auth::user()->usertype == 'parents')
        {
            return $next($request);
        }
        else
        {

        }
        return redirect('/');
    }
}
