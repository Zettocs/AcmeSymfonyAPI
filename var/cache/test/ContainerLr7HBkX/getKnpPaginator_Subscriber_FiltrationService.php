<?php

namespace ContainerLr7HBkX;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getKnpPaginator_Subscriber_FiltrationService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'knp_paginator.subscriber.filtration' shared service.
     *
     * @return \Knp\Component\Pager\Event\Subscriber\Filtration\FiltrationSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Event'.\DIRECTORY_SEPARATOR.'Subscriber'.\DIRECTORY_SEPARATOR.'Filtration'.\DIRECTORY_SEPARATOR.'FiltrationSubscriber.php';

        return $container->privates['knp_paginator.subscriber.filtration'] = new \Knp\Component\Pager\Event\Subscriber\Filtration\FiltrationSubscriber();
    }
}
