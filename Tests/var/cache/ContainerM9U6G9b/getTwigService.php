<?php

namespace ContainerM9U6G9b;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwigService extends BernhardWebstudio_PlaceholderBundle_Tests_AppKernelTestDebugContainer
{
    /**
     * Gets the private 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Cache/CacheInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Cache/FilesystemCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/ExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/AbstractExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/CoreExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/EscaperExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/OptimizerExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/StagingExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/ExtensionSet.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Template.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/TemplateWrapper.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Environment.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Loader/FilesystemLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/TranslationExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/YamlExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/HttpKernelExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/DebugExtension.php';

        $container->privates['twig'] = $instance = new \Twig\Environment(($container->privates['twig.loader.native_filesystem'] ??= new \Twig\Loader\FilesystemLoader([], \dirname(__DIR__, 3))), ['autoescape' => 'name', 'cache' => ($container->targetDir.''.'/twig'), 'charset' => 'UTF-8', 'debug' => true, 'strict_variables' => true]);

        $instance->addExtension(($container->privates['twig.extension.profiler'] ?? $container->load('getTwig_Extension_ProfilerService')));
        $instance->addExtension(($container->privates['twig.extension.trans'] ??= new \Symfony\Bridge\Twig\Extension\TranslationExtension(NULL)));
        $instance->addExtension(($container->privates['twig.extension.assets'] ?? $container->load('getTwig_Extension_AssetsService')));
        $instance->addExtension(($container->privates['twig.extension.code'] ?? $container->load('getTwig_Extension_CodeService')));
        $instance->addExtension(($container->privates['twig.extension.routing'] ?? $container->load('getTwig_Extension_RoutingService')));
        $instance->addExtension(($container->privates['twig.extension.yaml'] ??= new \Symfony\Bridge\Twig\Extension\YamlExtension()));
        $instance->addExtension(($container->privates['twig.extension.debug.stopwatch'] ?? $container->load('getTwig_Extension_Debug_StopwatchService')));
        $instance->addExtension(($container->privates['twig.extension.httpkernel'] ??= new \Symfony\Bridge\Twig\Extension\HttpKernelExtension()));
        $instance->addExtension(($container->privates['twig.extension.httpfoundation'] ?? $container->load('getTwig_Extension_HttpfoundationService')));
        $instance->addExtension(($container->privates['twig.extension.debug'] ??= new \Twig\Extension\DebugExtension()));
        $instance->addExtension(($container->privates['bewe_placeholder.extension'] ?? $container->load('getBewePlaceholder_ExtensionService')));
        $instance->addGlobal('app', ($container->privates['twig.app_variable'] ?? $container->load('getTwig_AppVariableService')));
        $instance->addRuntimeLoader(($container->privates['twig.runtime_loader'] ?? $container->load('getTwig_RuntimeLoaderService')));
        ($container->privates['twig.configurator.environment'] ?? $container->load('getTwig_Configurator_EnvironmentService'))->configure($instance);

        return $instance;
    }
}
