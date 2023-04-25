<?php

namespace Arcanedev\Localization\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Install;

class LocaleAuth extends Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {       
        return $next($request);
    }
}
