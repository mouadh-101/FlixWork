<?php

namespace ContainerHURynmF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JkS97dtService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.JkS97dt' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.JkS97dt'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'mailer' => ['privates', '.errored.Dq4s4ha', NULL, 'Cannot determine controller argument for "App\\Controller\\SecurityController::forgotPassword()": the $mailer argument is type-hinted with the non-existent class or interface: "App\\Controller\\Swift_Mailer". Did you forget to add a use statement?'],
            'request' => ['privates', '.errored.EguxQQI', NULL, 'Cannot determine controller argument for "App\\Controller\\SecurityController::forgotPassword()": the $request argument is type-hinted with the non-existent class or interface: "App\\Controller\\Request". Did you forget to add a use statement?'],
            'tokenGenerator' => ['privates', '.errored.ZK2jPDu', NULL, 'Cannot determine controller argument for "App\\Controller\\SecurityController::forgotPassword()": the $tokenGenerator argument is type-hinted with the non-existent class or interface: "App\\Controller\\TokenGeneratorInterface". Did you forget to add a use statement?'],
            'userRepository' => ['privates', '.errored.hOmif53', NULL, 'Cannot determine controller argument for "App\\Controller\\SecurityController::forgotPassword()": the $userRepository argument is type-hinted with the non-existent class or interface: "App\\Controller\\UserRepository". Did you forget to add a use statement?'],
        ], [
            'mailer' => '?',
            'request' => '?',
            'tokenGenerator' => '?',
            'userRepository' => '?',
        ]);
    }
}
