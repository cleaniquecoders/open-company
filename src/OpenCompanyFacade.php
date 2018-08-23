<?php

namespace CleaniqueCoders\OpenCompany;

/*
 * This file is part of open-company
 *
 * @license MIT
 * @package open-company
 */

use Illuminate\Support\Facades\Facade;

class OpenCompanyFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'OpenCompany';
    }
}
