<?php

namespace Container0LpDo3j;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLivraisonControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.jbYScXs.App\Controller\LivraisonController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.jbYScXs.App\\Controller\\LivraisonController::index()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'livraisonRepository' => ['privates', 'App\\Repository\\LivraisonRepository', 'getLivraisonRepositoryService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'livraisonRepository' => 'App\\Repository\\LivraisonRepository',
            'entityManager' => '?',
        ]))->withContext('App\\Controller\\LivraisonController::index()', $container);
    }
}