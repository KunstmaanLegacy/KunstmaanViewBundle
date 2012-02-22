<?php

namespace Kunstmaan\ViewBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\Reference;

class MenuFrontCompilerPass implements CompilerPassInterface {

    public function process(ContainerBuilder $container) {

        if (false === $container->hasDefinition('kunstmaan_view.menu.front.service')) {
            return;
        }

        $definition = $container->getDefinition('kunstmaan_view.menu.front.service');

        foreach ($container->findTaggedServiceIds('front_menu') as $id => $attributes) {
            $definition->addMethodCall('addFrontMenu', array(new Reference($id)));
        }
    }
}