<?php

namespace App\Repository;

use App\Entity\Review;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Review>
 */
class ReviewRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Review::class);
    }


    public function findReviewsWithUserNames(int $productId): array
    {
        return $this->createQueryBuilder('r')
        ->select('r.createdAt AS createdAt', 'r.content AS content', 'u.prenom AS username') // Champs nécessaires
        ->innerJoin('r.user', 'u')  // Relation avec l'utilisateur
        ->where('r.IdProduit = :productId') // Filtrer par produit
        ->setParameter('productId', $productId)
        ->orderBy('r.createdAt', 'DESC') // Trier par date (plus récent en premier)
        ->setMaxResults(2) // Limiter le nombre de résultats
        ->getQuery()
        ->getResult();
    }
}
    