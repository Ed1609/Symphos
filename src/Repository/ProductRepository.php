<?php

namespace App\Repository;

use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Product>
 */
class ProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }

    public function _touslesarticlesfemmes_()
    {
        $date = new \DateTime();
        $date->modify('-30 days');

        return $this->createQueryBuilder('a')
            ->where('a.section = :section')
            ->andWhere('a.addAt >= :date')
            ->setParameter('section', 'femme')
            ->setParameter('date', $date)
            ->setMaxResults(2)
            ->getQuery()
            ->getResult();
    }

    public function _touslesarticleshommes_()
    {
        $date = new \DateTime();
        $date->modify('-30 days');
        
        return $this->createQueryBuilder('b')
        ->where('b.section = :section')
        ->andWhere('b.addAt >= :date')
        ->setParameter('section', 'homme')
        ->setParameter('date', $date)
        ->setMaxResults(2)
        ->getQuery()
        ->getResult();
    }

    public function _touslesaccessoires_()
    {
        $date = new \DateTime();
        $date->modify('-30 days');
        return $this->createQueryBuilder('c')
            ->where('c.type_produit = :type_produit')
            ->andWhere('c.addAt >= :date')
            ->setParameter('type_produit', 'accessoire')
            ->setParameter('date', $date)
            ->setMaxResults(2)
            ->getQuery()
            ->getResult();
    }

    public function _EnPromotion_()
    {

        $products = $this->createQueryBuilder('p')
        ->where('p.EnPromotion = :EnPromotion')
        ->setParameter('EnPromotion', 1)
        ->getQuery()
        ->getResult();
    
        if (count($products) > 0) {
            return $products[array_rand($products)];
        }

        return null;
    }

    public function countAllProducts(): int
    {
        return $this->createQueryBuilder('p')
            ->select('COUNT(p.id)')
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function findByCategory(string $category, int $limit, int $offset): array
    {
        return $this->createQueryBuilder('p')
            ->where('p.section = :section')
            ->setParameter('section', $category)
            ->orderBy('p.id', 'DESC')
            ->setMaxResults($limit)
            ->setFirstResult($offset)
            ->getQuery()
            ->getResult();
    }

    public function findByType(string $type, int $limit, int $offset): array
    {
        return $this->createQueryBuilder('p')
            ->where('p.typeProduit = :type')
            ->setParameter('type', $type)
            ->orderBy('p.id', 'DESC')
            ->setMaxResults($limit)
            ->setFirstResult($offset)
            ->getQuery()
            ->getResult();
    }

        // 1. findNewArrivals
        public function findNewArrivals(int $limit, int $offset): array
        {
            return $this->createQueryBuilder('p')
                ->where('DATEDIFF(CURRENT_DATE(), p.dateAjouter) <= 30') // Products added within the last 30 days
                ->orderBy('p.id', 'DESC')
                ->setMaxResults($limit)
                ->setFirstResult($offset)
                ->getQuery()
                ->getResult();
        }
    
        // 2. findCollection
        public function findCollection(int $limit, int $offset): array
        {
            return $this->createQueryBuilder('p')
                ->join('App\Entity\Achat', 'a', 'WITH', 'p.id = a.idProduit')
                ->where('a.statut = 1')
                ->orderBy('a.id', 'DESC')
                ->setMaxResults($limit)
                ->setFirstResult($offset)
                ->getQuery()
                ->getResult();
        }
    
        // 3. findBoutique
        public function findBoutique(int $limit, int $offset): array
        {
            return $this->createQueryBuilder('p')
                ->orderBy('p.id', 'DESC')
                ->setMaxResults($limit)
                ->setFirstResult($offset)
                ->getQuery()
                ->getResult();
        }
    
        // 4. findPromotions
        public function findPromotions(int $limit, int $offset): array
        {
            return $this->createQueryBuilder('p')
                ->where('p.EnPromotion = :EnPromotion')
                ->setParameter('EnPromotion',1)
                ->setMaxResults($limit)
                ->setFirstResult($offset)
                ->getQuery()
                ->getResult();
        }
    
        // 5. findAllWithPagination
        public function findAllWithPagination(int $limit, int $offset): array
        {
            return $this->createQueryBuilder('p')
                ->orderBy('p.id', 'DESC')
                ->setMaxResults($limit)
                ->setFirstResult($offset)
                ->getQuery()
                ->getResult();
        }


        public function findArticlesFemmes(int $limit, int $offset): array
        {
            return $this->createQueryBuilder('b')
                ->where('b.section = :section')
                ->setParameter('section', 'homme')
                ->setMaxResults($limit)
                ->setFirstResult($offset)
                ->getQuery()
                ->getResult();
        }

}
