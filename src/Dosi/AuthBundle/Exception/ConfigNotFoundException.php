<?php

namespace Dosi\AuthBundle\Exception;

/**
 * 
 */
class ConfigNotFoundException extends NotFoundException
{
    public function __construct($id, $code = null, $previous = null)
    {
        parent::__construct($id, 'Config', $code, $previous);
    }
}
