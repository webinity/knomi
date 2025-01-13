<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->segment(1) === 'en') {
            App::setLocale('en');
        } else {
            App::setLocale('cs');
        }
        
        return $next($request);
    }
} 