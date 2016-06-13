<?php

namespace Dosi\AuthBundle;

use Dosi\AuthBundle\DependencyInjection\Security\Factory\SsoFactory;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Kernel;
use Dosi\AuthBundle\DependencyInjection\Compiler\FactoryPass;
use Dosi\AuthBundle\DependencyInjection\Security\Factory\LdapFactory;

class DosiAuthBundle extends Bundle
{

    /**
     * {@inheritdoc}
     */  
    public function boot()
    {
        if (!function_exists('ldap_connect')) {
            throw new \Exception("module php-ldap isn't install");
        }
    }  
  
    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $ext = $container->getExtension('security');
        $ext->addSecurityListenerFactory(new SsoFactory());
        $ext->addSecurityListenerFactory(new LdapFactory);

        $container->addCompilerPass(new FactoryPass());
    }
}
