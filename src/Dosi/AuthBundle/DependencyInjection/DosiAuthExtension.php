<?php

namespace Dosi\AuthBundle\DependencyInjection;

use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\Definition\Processor;
use Symfony\Component\Config\FileLocator;

/**
 * 
 */
class DosiAuthExtension extends Extension
{
    public function load(array $config, ContainerBuilder $container)
    {
        $processor = new Processor();
        $providers = $processor->processConfiguration(new Configuration($container->getParameter('kernel.debug')), $config);

        foreach ($providers as $id => $provider) {
            $container->setParameter(sprintf('dosi.auth.manager.%s', $id), $provider);
        }

        $loader = new XmlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('security_listeners.xml');
        $loader->load('factory.xml');
        $loader->load('cas.xml');
        $loader->load('security_ldap.xml');
        
        $configuration = new Configuration(false);
        $configs = $this->processConfiguration($configuration, $config);
        $container->setParameter('dosi_ldap.ldap_connection.params', $configs);
        $container->setParameter('dosi_ldap.authentication.bind_username_before', $configs['client']['bind_username_before']);        
    }
    
    public function getAlias()
    {
        return "dosi_auth";
    }    
}


