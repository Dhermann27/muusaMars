<?php

namespace App\Http\Middleware;

use App\Enums\Usertype;
use Closure;
use Illuminate\Support\Facades\Auth;

class SuperUser
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return Auth::user()->usertype == Usertype::Admin ? $next($request) : redirect('/');
    }
}
