<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use MercurySeries\Flashy\Flashy;

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
        if (Auth::User()->type === "fan_blog") {
            Flashy::message('Commentaire Ajouter avec succès');
             return redirect()->route('accueil');
            }else{
                session()->flash('messageErreur', '');
                return redirect('/login');
            }

       /* if (Auth::user()->type === "Admin") {
            if (Auth::user()->etat === "Activé") {
                return redirect()->route('Professeur');
            }else{
                Auth::logout();
                session()->flash('messageErreur', '');
                return redirect('/login');
            }
        }*/
        
    }
}
