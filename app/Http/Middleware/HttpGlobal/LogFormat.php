<?php

namespace App\Http\Middleware\HttpGlobal;

use Closure;
use App\Libs\LogFormat as AppLog;

class LogFormat
{

    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $module = explode('.', \Route::currentRouteName());
        $monolog = \Log::getMonolog();

        (new AppLog())->init($monolog, $module[0] . '_' . studly_case($module[1] . '_controller') ?: 'unknownHttp');

        return $next($request);
    }

}
