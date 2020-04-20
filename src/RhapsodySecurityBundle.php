<?php

declare(strict_types=1);

namespace PhpGuild\RhapsodySecurityBundle;

use Doctrine\Bundle\DoctrineBundle\DependencyInjection\Compiler\DoctrineOrmMappingsPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class RhapsodySecurityBundle
 */
class RhapsodySecurityBundle extends Bundle
{
    /**
     * build
     *
     * @param ContainerBuilder $container
     */
    public function build(ContainerBuilder $container): void
    {
        $container->addCompilerPass(DoctrineOrmMappingsPass::createXmlMappingDriver([
            realpath(__DIR__ . '/Resources/config/doctrine/mapping') => __NAMESPACE__ . '\Model',
        ]));
    }
}
