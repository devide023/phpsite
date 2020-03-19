<?php

namespace App\Http\Middleware;

use App\Http\Controllers\Api\UserController;
use Closure;
use Illuminate\Support\Facades\Auth;
use tools;
class webapi_auth
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
        $tool = new tools();
        $res = $tool->checktoken($request);
        if($res['code']==1) {
            return $next($request);
        }
        else{
            return response()->json($res);
        }
    }
}
