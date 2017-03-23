<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;

class FreeUsersMiddleware
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
        //aller dans Kernel ajouter 'admin' => \App\Http\Middleware\AdminMiddleware::class
        //aller dans web et ajouter a path role admin
        //
        //
        //

        //1-user doit auth

        //2-auth doit avoir role
        if(Sentinel::check() && Sentinel::getUser()->roles()->first()->slug == 'freeUsers') //verifcation connecter et plus role freeUsers
            return $next($request);
        else
            return redirect('/sentinel/public/');
    }
}
