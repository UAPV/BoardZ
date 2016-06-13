<?php

namespace Dosi\AuthBundle\Sso;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\BadCredentialsException;
use Dosi\AuthBundle\Security\Core\Authentication\Token\SsoToken;
use Buzz\Client\ClientInterface;

/**
 * 
 */
class Manager
{
    /**
     * @var \Dosi\AuthBundle\Sso\ServerInterface
     */
    private $server;

    /**
     * @var \Dosi\AuthBundle\Sso\ProtocolInterface
     */
    private $protocol;

    /**
     * @var \Buzz\Client\ClientInterface
     */
    private $client;

    /**
     * Constructor.
     *
     * @param ServerInterface              $server
     * @param ProtocolInterface            $protocol
     * @param \Buzz\Client\ClientInterface $client
     */
    public function __construct(ServerInterface $server, ProtocolInterface $protocol, ClientInterface $client)
    {
        $this->server   = $server;
        $this->protocol = $protocol;
        $this->client   = $client;
    }

    /**
     * Validates given credentials.
     *
     * @param string $credentials
     *
     * @return ValidationInterface
     */
    public function validateCredentials($credentials)
    {
        $request    = $this->server->buildValidationRequest($credentials);
        $validation = $this->protocol->executeValidation($this->client, $request, $credentials);

        return $validation;
    }

    /**
     * Creates a token from the request.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Dosi\AuthBundle\Security\Core\Authentication\Token\SsoToken
     */
    public function createToken(Request $request)
    {
        return new SsoToken($this, $this->protocol->extractCredentials($request));
    }

    /**
     * @return \Dosi\AuthBundle\Sso\ServerInterface
     */
    public function getServer()
    {
        return $this->server;
    }

    /**
     * @return \Dosi\AuthBundle\Sso\ProtocolInterface
     */
    public function getProtocol()
    {
        return $this->protocol;
    }
}
