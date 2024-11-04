<?php

namespace ContainerQJQ7XR5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWalletControllerindeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.q30XUWO.App\Controller\WalletController::inde()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.q30XUWO.App\\Controller\\WalletController::inde()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'walletRepository' => ['privates', 'App\\Repository\\WalletRepository', 'getWalletRepositoryService', true],
            'paymentController' => ['services', 'App\\Controller\\PaymentController', 'getPaymentControllerService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'walletRepository' => 'App\\Repository\\WalletRepository',
            'paymentController' => 'App\\Controller\\PaymentController',
            'entityManager' => '?',
        ]))->withContext('App\\Controller\\WalletController::inde()', $container);
    }
}