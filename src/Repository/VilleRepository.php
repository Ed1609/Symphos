<?php

namespace App\Repository;

use App\Entity\Ville;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Ville>
 */
class VilleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ville::class);
    }

        // Méthode pour récupérer toutes les villes triées par nom
        public function findAllVilles(): array
        {
            return$this->createQueryBuilder('v')
                ->orderBy('v.ville', 'ASC')
                ->getQuery()
                ->getResult();
        }
}
