<?php

namespace ContainerJeuXqbq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBewePlaceholder_ProviderService extends BernhardWebstudio_PlaceholderBundle_Tests_AppKernelTestDebugContainer
{
    /**
     * Gets the public 'bewe_placeholder.provider' shared service.
     *
     * @return \BernhardWebstudio\PlaceholderBundle\Service\PlaceholderProviderService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/PlaceholderProviderService.php';
        include_once \dirname(__DIR__, 4).'/src/Service/PlaceholderGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Service/AbstractNodeExecGenerator.php';
        include_once \dirname(__DIR__, 4).'/src/Service/PrimitivePlaceholderGenerator.php';

        return $container->services['bewe_placeholder.provider'] = new \BernhardWebstudio\PlaceholderBundle\Service\PlaceholderProviderService(($container->services['bewe_placeholder.generator.primitive'] ??= new \BernhardWebstudio\PlaceholderBundle\Service\PrimitivePlaceholderGenerator('primitive', NULL, 5)), [], NULL, false);
    }
}
