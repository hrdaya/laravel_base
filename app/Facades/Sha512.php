<?php
declare(strict_types=1);

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class Sha512 extends Facade
{
    /**
     * {@inheritdoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'sha512';
    }
}
