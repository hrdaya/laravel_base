<?php

namespace App\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function boot(Router $router)
    {
        //

        parent::boot($router);
    }

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router $router
     *
     * @return void
     */
    public function map(Router $router)
    {
        // デフォルトのルーティング
        $this->mapWebRoutes($router);

        // テストのルーティング
        if (config('app.debug')) {
            $this->mapTestRoutes($router);
        }
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @param  \Illuminate\Routing\Router $router
     *
     * @return void
     */
    protected function mapWebRoutes(Router $router)
    {
        $router->group(
            [
                'namespace'  => $this->namespace,
                'middleware' => 'web',
            ],
            function ($router) {
                foreach (\Config::get('routes.web') as $file) {
                    require app_path('Http/Routes/web').DIRECTORY_SEPARATOR.$file.'.php';
                }
            }
        );
    }

    /**
     * Define the "testing" routes for the test.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @param  \Illuminate\Routing\Router $router
     *
     * @return void
     */
    protected function mapTestRoutes(Router $router)
    {
        $router->group(
            [
                'namespace'  => $this->namespace,
                'middleware' => 'web',
            ],
            function ($router) {
                foreach (\Config::get('routes.testing') as $file) {
                    require app_path('Http/Routes/testing').DIRECTORY_SEPARATOR.$file.'.php';
                }
            }
        );
    }
}
