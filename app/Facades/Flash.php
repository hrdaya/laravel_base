<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class Flash extends Facade
{

    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'flash';
    }

}
