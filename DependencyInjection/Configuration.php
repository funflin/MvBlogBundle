<?php

namespace Mv\BlogBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('mv_blog');

        $rootNode
            ->children()
                ->scalarNode('robot_email')
                    ->defaultValue('test@example.com')
                    ->info('Changer cette adresse par votre adresse')
                ->end()
                ->scalarNode('max_per_page')
                    ->defaultValue(10)
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
