<?php

namespace App\Http\Middleware;

use Closure;
use Log;

class ABCDMiddleware
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
        $param = $request->input('param');
		if(!empty($param))
		{
			Log::info('processing at middleware');
			return redirect('/test');
		}
		return $next($request);
    }
}
