<?php
declare(strict_types=1);

namespace App\Providers\Custom;

use Illuminate\Support\ServiceProvider;
use App\Libs\Pdf;

class PdfServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'pdf',
            function () {
                return new Pdf();
            }
        );
    }
}
