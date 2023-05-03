<?php

namespace Container1I2Bn9H;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DiAfL4JService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.diAfL4J' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.diAfL4J'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'encoder' => ['privates', '.errored.gQlaF.2', NULL, 'Cannot determine controller argument for "App\\Controller\\SecurityController::apiAdminLogin()": the $encoder argument is type-hinted with the non-existent class or interface: "App\\Controller\\UserPasswordEncoderInterface". Did you forget to add a use statement?'],
            'jwtManager' => ['services', 'lexik_jwt_authentication.jwt_manager', 'getLexikJwtAuthentication_JwtManagerService', true],
        ], [
            'encoder' => '?',
            'jwtManager' => '?',
        ]);
    }
}
