<?php

namespace PhpBenchmarksSymfony\Bundle\RestBundle;

use PhpBenchmarksSymfony\DependencyInjection\CompilerPass\AddTranslationsPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class RestBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new AddTranslationsPass());
    }
}
