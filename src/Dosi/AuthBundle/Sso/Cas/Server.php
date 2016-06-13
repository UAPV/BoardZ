<?php

namespace Dosi\AuthBundle\Sso\Cas;

use Dosi\AuthBundle\Sso\AbstractServer;
use Dosi\AuthBundle\Sso\ServerInterface;
use Buzz\Message\Request;

/**
 * 
 */
class Server extends AbstractServer
{
    /**
     * @return string
     */
    public function getLoginUrl()
    {
        return sprintf('%s?service=%s', parent::getLoginUrl(), urlencode($this->getCheckUrl()));
    }

    /**
     * @return string
     */
    public function getLogoutUrl()
    {
        $service = sprintf('service=%s', urlencode($this->getCheckUrl()));
        $url = $this->getLogoutTarget() ? sprintf('&url=%s', urlencode($this->getLogoutTarget())) : null;

        return sprintf('%s?%s%s', parent::getLogoutUrl(), $service, $url);
    }

    /**
     * @return string
     */
    public function getValidationUrl()
    {
        return sprintf('%s?service=%s', parent::getValidationUrl(), urlencode($this->getCheckUrl()));
    }

    /**
     * @param string $credentials
     *
     * @return \Buzz\Message\Request
     */
    public function buildValidationRequest($credentials)
    {
        $request = new Request();
        $request->fromUrl(sprintf(
            '%s&ticket=%s',
            $this->getValidationUrl(),
            $credentials
        ));

        return $request;
    }

}
