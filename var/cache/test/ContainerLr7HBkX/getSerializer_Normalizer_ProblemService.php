<?php

namespace ContainerLr7HBkX;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSerializer_Normalizer_ProblemService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'serializer.normalizer.problem' shared service.
     *
     * @return \Symfony\Component\Serializer\Normalizer\ProblemNormalizer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Normalizer'.\DIRECTORY_SEPARATOR.'NormalizerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Normalizer'.\DIRECTORY_SEPARATOR.'CacheableSupportsMethodInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Normalizer'.\DIRECTORY_SEPARATOR.'ProblemNormalizer.php';

        return $container->privates['serializer.normalizer.problem'] = new \Symfony\Component\Serializer\Normalizer\ProblemNormalizer(true);
    }
}
