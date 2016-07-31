<?php

namespace App\Providers\Custom;

use Collective\Html\HtmlServiceProvider as CollectiveHtmlServiceProvider;
use App\Libs\Html\HtmlBuilder;
use App\Libs\Html\FormBuilder;

class HtmlServiceProvider extends CollectiveHtmlServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerHtmlBuilder();
        $this->registerFormBuilder();

        $this->app->alias('html', HtmlBuilder::class);
        $this->app->alias('form', FormBuilder::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'html',
            'form',
            HtmlBuilder::class,
            FormBuilder::class,
        ];
    }
}