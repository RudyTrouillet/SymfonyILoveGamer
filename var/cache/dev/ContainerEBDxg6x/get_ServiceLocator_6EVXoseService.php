<?php

namespace ContainerEBDxg6x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_6EVXoseService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.6EVXose' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.6EVXose'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\HomeController::addgame' => ['privates', '.service_locator.FchPHJ.', 'get_ServiceLocator_FchPHJ_Service', true],
            'App\\Controller\\HomeController::index' => ['privates', '.service_locator.333XBmL', 'get_ServiceLocator_333XBmLService', true],
            'App\\Controller\\HomeController::remgame' => ['privates', '.service_locator.BLNh1YH', 'get_ServiceLocator_BLNh1YHService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.iQAD6w2', 'get_ServiceLocator_IQAD6w2Service', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\HomeController:addgame' => ['privates', '.service_locator.FchPHJ.', 'get_ServiceLocator_FchPHJ_Service', true],
            'App\\Controller\\HomeController:index' => ['privates', '.service_locator.333XBmL', 'get_ServiceLocator_333XBmLService', true],
            'App\\Controller\\HomeController:remgame' => ['privates', '.service_locator.BLNh1YH', 'get_ServiceLocator_BLNh1YHService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.iQAD6w2', 'get_ServiceLocator_IQAD6w2Service', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\HomeController::addgame' => '?',
            'App\\Controller\\HomeController::index' => '?',
            'App\\Controller\\HomeController::remgame' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\HomeController:addgame' => '?',
            'App\\Controller\\HomeController:index' => '?',
            'App\\Controller\\HomeController:remgame' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}