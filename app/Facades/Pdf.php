<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class Pdf extends Facade
{

    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'pdf';
    }
}