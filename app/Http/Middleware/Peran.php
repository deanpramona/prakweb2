<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class Peran
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $peran): Response
    {
        // kita cek, kalo misal yg login nya admin dan manager maka arahkan ke backend, selain itu arahkan ke frontend
        if (Auth::check()) {
         $perans = explode('-', $peran);
         foreach($perans as $group){
            if (Auth::user()->role == $group) {
                return $next($request);
            }
         }   
        } 
    return redirect('/frontend/dashboard');
    }
}
