<?php

namespace Dosi\AuthBundle\Exception;

/**
 * 
 */
class ProtocolNotFoundException extends NotFoundException
{
    public function __construct($id, $code = null, $previous = null)
    {
        parent::__construct($id, 'Protocol', $code, $previous);
    }
}
