<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class redirector
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
        if (Auth::user()->type === "User") {
            if (Auth::user()->etat === "Activé") {
                return redirect()->route('accueil');
            }else{
                Auth::logout();
                session()->flash('messageErreur', '');
                return redirect('/login');
            }
        }

        if (Auth::user()->type === "Admin") {
            if (Auth::user()->etat === "Activé") {
                return redirect()->route('Professeur');
            }else{
                Auth::logout();
                session()->flash('messageErreur', '');
                return redirect('/login');
            }
        }
        
    }
}
