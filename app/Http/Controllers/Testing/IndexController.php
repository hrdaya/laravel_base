<?php

namespace App\Http\Controllers\Testing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    /**
     * トップページ
     */
    public function index(Request $request)
    {
        return view('testing.index.index', []);
    }
}