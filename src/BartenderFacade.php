<?php

namespace Pixelfed\Bartender;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Pixelfed\Bartender\BartenderClass
 */
class BartenderFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Bartender';
    }
}
