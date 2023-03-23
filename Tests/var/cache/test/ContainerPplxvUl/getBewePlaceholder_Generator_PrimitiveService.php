<?php

namespace ContainerPplxvUl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBewePlaceholder_Generator_PrimitiveService extends BernhardWebstudio_PlaceholderBundle_Tests_AppKernelTestDebugContainer
{
    /**
     * Gets the public 'bewe_placeholder.generator.primitive' shared service.
     *
     * @return \BernhardWebstudio\PlaceholderBundle\Service\PrimitivePlaceholderGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/src/Service/PlaceholderGeneratorInterface.php';
        include_once \dirname(__DIR__, 5).'/src/Service/AbstractNodeExecGenerator.php';
        include_once \dirname(__DIR__, 5).'/src/Service/PrimitivePlaceholderGenerator.php';

        return $container->services['bewe_placeholder.generator.primitive'] = new \BernhardWebstudio\PlaceholderBundle\Service\PrimitivePlaceholderGenerator('primitive', NULL, 5);
    }
}
