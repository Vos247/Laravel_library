<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckAdmin
{
    public function handle($request, Closure $next)
    {
        if (Auth::user()->email !== 'admin@gmail.com') {
            return redirect('/home')->with('error', 'Bạn không có quyền truy cập!');
        }
        return $next($request);
    }
}
