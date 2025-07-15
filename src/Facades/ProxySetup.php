<?php

namespace Aindot\ProxySetup\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Aindot\ProxySetup\ProxySetup
 */
class ProxySetup extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Aindot\ProxySetup\ProxySetup::class;
    }
}
