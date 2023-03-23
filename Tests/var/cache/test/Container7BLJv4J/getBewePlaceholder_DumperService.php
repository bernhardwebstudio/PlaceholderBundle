<?php

namespace Container7BLJv4J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBewePlaceholder_DumperService extends BernhardWebstudio_PlaceholderBundle_Tests_AppKernelTestDebugContainer
{
    /**
     * Gets the public 'bewe_placeholder.dumper' shared service.
     *
     * @return \BernhardWebstudio\PlaceholderBundle\Commands\PlaceholderPrepareCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 5).'/src/Commands/PlaceholderPrepareCommand.php';

        return $container->services['bewe_placeholder.dumper'] = new \BernhardWebstudio\PlaceholderBundle\Commands\PlaceholderPrepareCommand(($container->services['bewe_placeholder.provider'] ?? $container->load('getBewePlaceholder_ProviderService')));
    }
}
