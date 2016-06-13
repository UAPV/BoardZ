<?php

namespace Dosi\AuthBundle\Exception;

/**
 * 
 */
class NotFoundException extends \InvalidArgumentException
{
    public function __construct($id, $subject = 'Service', $code = null, $previous = null)
    {
        parent::__construct(sprintf('[DosiAuthBundle] %s "%s" is not defined.', $subject, $id), $code, $previous);
    }
}
