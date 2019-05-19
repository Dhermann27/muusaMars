<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use App\Enums\Usertype;
use Closure;

class LiterateUser
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
        return Auth::user()->usertype >= Usertype::Pc ? $next($request) : redirect('/');
    }
}
