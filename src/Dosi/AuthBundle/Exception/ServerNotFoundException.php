<?php

namespace Dosi\AuthBundle\Exception;

/**
 * 
 */
class ServerNotFoundException extends NotFoundException
{
    public function __construct($id, $code = null, $previous = null)
    {
        parent::__construct($id, 'Server', $code, $previous);
    }
}
