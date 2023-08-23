<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            $request->session()->regenerate();
            return $next($request);
        }
        $request->session()->regenerate();
        return redirect()->route('login_page')->with('gagal','Silakan login terlebih dahulu');
    }
}
