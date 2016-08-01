<?php

namespace App\Http\Middleware\Custom;

use Closure;

class HttpOnly
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // リクエストがHTTPではない場合の処理
        if ($request->ajax()) {
            abort(404);
        }

        // HTTPからのアクセスだと、そのまま次の処理に進みます
        return $next($request);
    }
}
