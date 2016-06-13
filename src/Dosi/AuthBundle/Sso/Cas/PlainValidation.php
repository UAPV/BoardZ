<?php

namespace Dosi\AuthBundle\Sso\Cas;

use Dosi\AuthBundle\Sso\AbstractValidation;
use Dosi\AuthBundle\Sso\ValidationInterface;
use Buzz\Message\Response;

/**
 * 
 */
class PlainValidation extends AbstractValidation implements ValidationInterface
{
    /**
     * {@inheritdoc}
     */
    protected function validateResponse(Response $response)
    {
        $content = $response->getContent();
        $data    = explode("\n", str_replace("\n\n", "\n", str_replace("\r", "\n", $content)));
        $success = strtolower($data[0]) === 'yes';
        $message = (count($data) > 1 && $data[1]) ? $data[1] : null;

        if ($success) {
            $this->username = $message;
        } else {
            $this->error = $message;
        }

        return $success;
    }
}
