<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ValidUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {

        // Using Check Function Method

        // if (Auth::check()) {
        //     return $next($request);
        // } else {
        //     return redirect()->route('loginPage');
        // }



        // Using Default User Function Method

        if (!Auth::check()) {
            return redirect()->route('loginPage');
        }

        if (Auth::user()->role == $role) {
            return $next($request);
        }

        if (Auth::user()->role == "employee") {
            return redirect()->route("employees.index");
        } else {

            return redirect()->route('loginPage');
        }
    }
}
