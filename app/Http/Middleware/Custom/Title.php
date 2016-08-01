<?php

namespace App\Http\Middleware\Custom;

use Closure;

class Title
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
        // ビューに環境文字列を挿入
        \View::share('env_title', \Config::get('title.env_title'));

        // ビューにタイトル文字列を挿入
        $routNames = explode('.', \Route::currentRouteName());
        $title = null;
        // config/title.phpのtitlesからタイトルを取得する
        for ($i = count($routNames) - 1; $i >= 0; $i--) {
            $title = \Config::get('title.titles.'.implode('.', $routNames));
            if (is_string($title)) {
                break;
            }
            unset($routNames[$i]);
        }

        \View::share('title', is_string($title) ? $title : 'undefined');

        return $next($request);
    }
}
