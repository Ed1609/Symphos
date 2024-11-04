<?php

namespace App\Repository;

use App\Entity\PromoDynamique;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PromoDynamique>
 */
class PromoDynamiqueRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PromoDynamique::class);
    }

    public function _PromotionDynamique_()
    {
        $products = $this->createQueryBuilder('p')
            ->where('p.ImagePromo = :ImagePromo')
            ->setParameter('ImagePromo', 1)
            ->getQuery()
            ->getResult();
        
        if (count($products) > 0) {
            return $products[array_rand($products)];
        }
        
        return null;
    }
}
