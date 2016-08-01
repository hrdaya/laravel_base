<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class Sha256 extends Facade
{
    /**
     * {@inheritdoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'sha256';
    }
}
