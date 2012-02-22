<?php

namespace Kunstmaan\ViewBundle;

use Symfony\Bundle\TwigBundle\TwigBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Kunstmaan\ViewBundle\DependencyInjection\Compiler\MenuFrontCompilerPass;

class KunstmaanViewBundle extends Bundle
{
	public function getParent(){
		return "TwigBundle";
	}

    public function build(ContainerBuilder $container) {
        parent::build($container);
        $container->addCompilerPass(new MenuFrontCompilerPass());
    }
}
