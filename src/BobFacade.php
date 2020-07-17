<?php

namespace Jeffbeltran\Bob;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Jeffbeltran\Bob\Bob
 */
class BobFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'bob';
    }
}
