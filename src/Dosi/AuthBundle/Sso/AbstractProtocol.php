<?php

namespace Dosi\AuthBundle\Sso;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Buzz\Message\Response;
use Dosi\AuthBundle\Security\Core\Authentication\Token\SsoToken;

/**
 * 
 */
abstract class AbstractProtocol extends AbstractComponent implements ProtocolInterface
{
    /**
     * {@inheritdoc}
     */
    public function processLogout(SsoToken $token)
    {
        // does nothing most of the case
    }
}
