<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class Sha1 extends Facade
{
    /**
     * {@inheritdoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'sha1';
    }
}
