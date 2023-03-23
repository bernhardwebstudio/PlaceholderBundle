<?php

namespace ContainerPplxvUl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDebug_ArgumentResolver_NotTaggedControllerService extends BernhardWebstudio_PlaceholderBundle_Tests_AppKernelTestDebugContainer
{
    /**
     * Gets the private 'debug.argument_resolver.not_tagged_controller' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/http-kernel/Controller/ValueResolverInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/TraceableValueResolver.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/NotTaggedControllerValueResolver.php';

        return $container->privates['debug.argument_resolver.not_tagged_controller'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver(($container->privates['.service_locator.Bjl_D3F'] ?? $container->load('get_ServiceLocator_BjlD3FService'))), ($container->privates['debug.stopwatch'] ??= new \Symfony\Component\Stopwatch\Stopwatch(true)));
    }
}
