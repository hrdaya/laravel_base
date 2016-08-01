<?php

namespace App\Http\Middleware\Custom;

use Closure;

class AjaxOnly
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
        // リクエストがajaxではない場合の処理
        if (! $request->ajax()) {
            abort(404);
        }

        // ajaxからのアクセスだと、そのまま次の処理に進みます
        return $next($request);
    }
}
