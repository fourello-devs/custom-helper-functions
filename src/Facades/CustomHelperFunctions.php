<?php

namespace FourelloDevs\CustomHelperFunctions\Facades;

use Illuminate\Support\Facades\Facade;

class CustomHelperFunctions extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'custom-helper-functions';
    }
}
