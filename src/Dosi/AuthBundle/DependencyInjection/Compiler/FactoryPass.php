<?php

namespace Dosi\AuthBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;

/**
 * Authentificator factory.
 */
class FactoryPass implements CompilerPassInterface
{
    /**
     * @param ContainerBuilder $container
     */
    public function process(ContainerBuilder $container)
    {
        if (!$container->has('dosi.auth.factory')) {
            return;
        }        

        $factoryBuilder = $container->getDefinition('dosi.auth.factory');


        foreach ($container->findTaggedServiceIds('dosi.auth.protocol') as $id => $attributes) {
            $factoryBuilder->addMethodCall('addProtocol', array($attributes[0]['id'], $id));
        }

        foreach ($container->findTaggedServiceIds('dosi.auth.server') as $id => $attributes) {
            $factoryBuilder->addMethodCall('addServer', array($attributes[0]['id'], $id));
        }

    }
}
