<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsAdmin
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
        if (Auth::check())
            if (auth()->user()->is_admin)
                return $next($request);

        return redirect()->route('accueil_front_office')->with("error", "vous n'avez pas le role admin.");
    }
}
