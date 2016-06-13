<?php

namespace Dosi\AuthBundle\DependencyInjection\Security\Factory;

use Symfony\Component\DependencyInjection\DefinitionDecorator;
use Symfony\Component\DependencyInjection\Reference;

/**
 * Single Sign On factory.
 */
class SsoFactory extends AbstractSsoFactory
{
    public function __construct()
    {
        parent::__construct();

        $this->addOption('manager');
    }

    public function getKey()
    {
        return 'sso';
    }

    protected function getListenerId()
    {
        return 'security.authentication.listener.sso';
    }

    protected function createEntryPoint($container, $id, $config, $defaultEntryPoint)
    {
        $entryPointId = 'security.authentication.sso_entry_point.'.$id;

        $container
            ->setDefinition($entryPointId, new DefinitionDecorator('security.authentication.sso_entry_point'))
            ->addArgument($config)
        ;

        return $entryPointId;
    }
}
