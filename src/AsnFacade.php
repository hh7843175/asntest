<?php

namespace Nasn\Asn;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Nasn\Asn\Skeleton\SkeletonClass
 */
class AsnFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'asn';
    }
}
