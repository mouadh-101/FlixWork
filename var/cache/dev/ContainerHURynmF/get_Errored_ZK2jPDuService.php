<?php

namespace ContainerHURynmF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Errored_ZK2jPDuService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.errored.ZK2jPDu' shared service.
     *
     * @return \App\Controller\TokenGeneratorInterface
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->throw('Cannot determine controller argument for "App\\Controller\\SecurityController::forgotPassword()": the $tokenGenerator argument is type-hinted with the non-existent class or interface: "App\\Controller\\TokenGeneratorInterface". Did you forget to add a use statement?');
    }
}
