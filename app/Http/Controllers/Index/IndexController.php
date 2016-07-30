<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    /**
     * トップページ
     */
    public function index(Request $request)
    {
        \Log::warning(['test2' => 'test2']);
        \Log::debug(['test' => 'test']);
        \Log::info(
            substr(
                class_basename(\Route::currentRouteAction()),
                0,
                (strpos(class_basename(\Route::currentRouteAction()), '@') - 0)
            )
        );

        \Log::info(explode('.', \Route::currentRouteName()));
        return view('index.index.index', []);
    }
}