<?php

namespace Dosi\AuthBundle\Sso;

use Dosi\AuthBundle\Security\Core\Authentication\Token\SsoToken;
use Dosi\AuthBundle\Exception\InvalidConfigurationException;
use Symfony\Component\HttpFoundation\Request as SymfonyRequest;
use Buzz\Message\Request as BuzzRequest;
use Buzz\Client\ClientInterface;

/**
 * 
 */
interface ProtocolInterface extends ComponentInterface
{
    /**
     * Processes internal logout operations.
     *
     * @param \Dosi\AuthBundle\Security\Core\Authentication\Token\SsoToken $token
     *
     * @return void
     */
    public function processLogout(SsoToken $token);

    /**
     * Is given request an authentication validation request?
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return bool
     */
    public function isValidationRequest(SymfonyRequest $request);

    /**
     * Extract credentials from the validation request.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return string
     */
    public function extractCredentials(SymfonyRequest $request);

    /**
     * Handles validation request.
     *
     * Authentication is only effective if the SSO server validates user credentials.
     * The application sends a validation request and receive a success or error message.
     *
     * @param \Buzz\Client\ClientInterface $client
     * @param \Buzz\Message\Request        $request
     * @param string                       $credentials
     *
     * @return ValidationInterface A validation object
     *
     * @throws \Dosi\AuthBundle\Exception\InvalidConfigurationException
     */
    public function executeValidation(ClientInterface $client, BuzzRequest $request, $credentials);
}
