<?php
declare(strict_types=1);

namespace App\Providers\Custom;

use Collective\Html\HtmlServiceProvider as CollectiveHtmlServiceProvider;
use App\Libs\Hash\Md5;
use App\Libs\Hash\Sha1;
use App\Libs\Hash\Sha256;
use App\Libs\Hash\Sha512;

class HasherServiceProvider extends CollectiveHtmlServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('md5', function () {
            return new Md5();
        });
        $this->app->singleton('sha1', function () {
            return new Sha1();
        });
        $this->app->singleton('sha256', function () {
            return new Sha256();
        });
        $this->app->singleton('sha512', function () {
            return new Sha512();
        });

        $this->app->alias('md5', Md5::class);
        $this->app->alias('sha1', Sha1::class);
        $this->app->alias('sha256', Sha256::class);
        $this->app->alias('sha512', Sha512::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'md5',
            'sha1',
            'sha256',
            'sha512',
            Md5::class,
            Sha1::class,
            Sha256::class,
            Sha512::class,
        ];
    }
}
