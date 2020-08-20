<?php

namespace App\Http\Middleware;
session_start();

use App;
use Closure;
use URL;
<<<<<<< HEAD
=======
use Route;
>>>>>>> d6d5743fa07922659eb4d0baca532c6216f0a1c5
class SetLanguage
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
<<<<<<< HEAD
        
     if(URL::current() == "http://127.0.0.1:8000"){
=======
     if(Route::current()->uri == "/"){
>>>>>>> d6d5743fa07922659eb4d0baca532c6216f0a1c5
        $request->lang = $_SESSION['lang'];
        if($_SESSION['lang'] == null){
            $_SESSION['lang'] = $request->lang;
        }else{
             $request->lang = $_SESSION['lang'] ;
        }
     }else{

        $_SESSION['lang'] = $request->lang;
     }
            App::setLocale($request->lang);
        return $next($request);

    }
}
