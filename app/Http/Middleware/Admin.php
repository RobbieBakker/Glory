<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use app\User;


class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$role)
    {
        if(Auth::check()){
            foreach($role as $permitted_role){
                if ($request->user()->hasRole() == $permitted_role) {
                    return $next($request);
                }
            }
        }

        return redirect('/')->withErrors("Je hebt niet de juiste permissies!");
    }
}
