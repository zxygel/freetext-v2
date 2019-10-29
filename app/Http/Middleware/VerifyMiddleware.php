<?php

namespace App\Http\Middleware;

use Closure;

class VerifyMiddleware
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
        if ($request->hub_mode === "subscribe"
            && $request->hub_verify_token === "mytoken") {
            return response($request->hub_challenge, 200);
        }
        return $next($request);
        // echo "string";
    }
}
