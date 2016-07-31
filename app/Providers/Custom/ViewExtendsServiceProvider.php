<?php

namespace App\Providers\Custom;

use Illuminate\Support\ServiceProvider;
use App\Libs\Html\ViewExtends;

class ViewExtendsServiceProvider extends ServiceProvider
{

    /**
     * アプリケーションサービスの初期化処理
     *
     * @return void
     */
    public function boot()
    {
        (new ViewExtends())->init();
    }

    /**
     * コンテナ結合の登録
     *
     * @return void
     */
    public function register()
    {
        //
    }

}
