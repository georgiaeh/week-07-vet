<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class OwnerIsValid
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
        if($request->route("owner")->id !== $request->route("animal")->owner_id){
            abort(404, "Animal does not belong to owner");
        }
        return $next($request);
    }
}
