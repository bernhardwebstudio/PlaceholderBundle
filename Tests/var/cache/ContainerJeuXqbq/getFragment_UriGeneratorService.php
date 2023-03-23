<?php

namespace ContainerJeuXqbq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFragment_UriGeneratorService extends BernhardWebstudio_PlaceholderBundle_Tests_AppKernelTestDebugContainer
{
    /**
     * Gets the private 'fragment.uri_generator' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\FragmentUriGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Fragment/FragmentUriGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Fragment/FragmentUriGenerator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/UriSigner.php';

        return $container->privates['fragment.uri_generator'] = new \Symfony\Component\HttpKernel\Fragment\FragmentUriGenerator('/_fragment', ($container->privates['uri_signer'] ??= new \Symfony\Component\HttpKernel\UriSigner('TESTSecret')), ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()));
    }
}
