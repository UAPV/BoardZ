<?php

namespace Dosi\AuthBundle\Sso;

/**
 * 
 */
interface ComponentInterface
{
    /**
     * Setup configuration.
     *
     * @param array $config
     */
    public function setConfig(array $config);
}
