<?php
declare(strict_types=1);

namespace App\Providers\Custom;

use App\Libs\Flash;
use Illuminate\Support\ServiceProvider;

class FlashServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            'flash',
            function () {
                return new Flash();
            }
        );
    }
}
