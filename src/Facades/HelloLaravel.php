<?php

namespace Pavons\HelloLaravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Pavons\HelloLaravel\HelloLaravel
 */
class HelloLaravel extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Pavons\HelloLaravel\HelloLaravel::class;
    }
}
