<?php

namespace ContainerKuMBIx0;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRegistryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Registry' shared autowired service.
     *
     * @return \App\Controller\Registry
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['App\\Controller\\Registry'] = new \App\Controller\Registry();
    }
}
