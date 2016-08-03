<?php
declare(strict_types=1);

namespace App\Providers\Custom;

use Illuminate\Support\ServiceProvider;

class ConfigServiceProvider extends ServiceProvider
{
    /**
     * サービス初期処理登録後に実行.
     *
     * @return void
     */
    public function boot()
    {
        $configs = config(\App::environment());
        if (! is_null($configs)) {
            foreach ($configs as $key => $value) {
                $config = config($key) ?: [];
                config([$key => array_merge($config, $value)]);
            }
        }
    }

    /**
     * アプリケーションサービスの登録.
     *
     * @return void
     */
    public function register()
    {
    }
}
