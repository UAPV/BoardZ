<?php

namespace Dosi\AuthBundle\DependencyInjection;

use Symfony\Component\Config\Definition\NodeInterface;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * 
 */
class Configuration implements ConfigurationInterface
{
    /**
     * @var bool
     */
    private $debug;

    /**
     * @param bool $debug
     */
    public function  __construct($debug)
    {
        $this->debug = (Boolean) $debug;
    }

    /**
     * @return TreeBuilder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();    
        $rootNode = $treeBuilder->root('dosi_auth');
        $rootNode
            ->children()
                ->append($this->addSsoNode())
                ->append($this->addClientNode())
                ->append($this->addUserNode())
                ->append($this->addRoleNode())
                ->append($this->addAutocompleteNode())
            ->end()
        ;

        return $treeBuilder;
    }

    private function addSsoNode()
    {
        $treeBuilder = new TreeBuilder();
        $node = $treeBuilder->root('admin_sso');
        
        $node
            ->children()
                ->append($this->addProtocolNode())
                ->append($this->addServerNode())
            ->end()
        ;         
  
        return $node;
    }

    private function addProtocolNode()
    {
        $treeBuilder = new TreeBuilder();
        $node = $treeBuilder->root('protocol');
  
        $node
            ->isRequired()
            ->children()
                ->scalarNode('id')->isRequired()->cannotBeEmpty()->end()
                ->scalarNode('version')->defaultValue(2)->end()
             ->end()
            ;
  
        return $node;
    }
    
    private function addServerNode()
    {
        $treeBuilder = new TreeBuilder();
        $node = $treeBuilder->root('server');
  
        $node
            ->isRequired()
            ->children()
                ->scalarNode('id')->end()
                ->scalarNode('login_url')->end()
                ->scalarNode('logout_url')->end()
                ->scalarNode('validation_url')->end()
             ->end()
            ;
  
        return $node;                  
    }
    
    
    private function addClientNode()
    {
        $treeBuilder = new TreeBuilder();
        $node = $treeBuilder->root('client');
  
        $node
            ->isRequired()
            ->children()
                ->scalarNode('host')->isRequired()->cannotBeEmpty()->end()
                ->scalarNode('port')->defaultValue(389)->end()
                ->scalarNode('version')->end()
                ->scalarNode('username')->end()
                ->scalarNode('password')->end()
                ->booleanNode('bind_username_before')->defaultFalse()->end()
                ->scalarNode('referrals_enabled')->end()
                ->scalarNode('network_timeout')->end()
                ->booleanNode('skip_roles')->defaultFalse()->end()          
             ->end()
            ;
  
        return $node;
    }

    private function addUserNode()
    {
        $treeBuilder = new TreeBuilder();
        $node = $treeBuilder->root('user');
  
        $node
            ->isRequired()
            ->children()
                ->scalarNode('base_dn')->isRequired()->cannotBeEmpty()->end()
                ->scalarNode('filter')->end()
                ->scalarNode('name_attribute')->defaultValue('uid')->end()
                ->variableNode('attributes')->defaultValue(array())->end()
            ->end()
            ;
  
        return $node;
    }
  
    private function addRoleNode()
    {
        $treeBuilder = new TreeBuilder();
        $node = $treeBuilder->root('role');
  
        $node
            ->children()
                ->scalarNode('base_dn')->isRequired()->cannotBeEmpty()->end()
                ->scalarNode('filter')->end()
                ->scalarNode('name_attribute')->defaultValue('cn')->end()
                ->scalarNode('user_attribute')->defaultValue('member')->end()
                ->scalarNode('user_id')->defaultValue('dn')
                  ->validate()
                    ->ifNotInArray(array('dn', 'username'))
                    ->thenInvalid('Only dn or username')
                  ->end()
                ->end()
            ->end()
            ;
  
        return $node;
    }
    
    private function addAutocompleteNode()
    {
        $treeBuilder = new TreeBuilder();
        $node = $treeBuilder->root('autocomplete');
        
        $node
            ->children()
                ->variableNode('filter')->defaultValue(array())->end()
                ->variableNode('attributes')->defaultValue(array())->end()
            ->end()
        ;
        
        return $node;
    }
}
