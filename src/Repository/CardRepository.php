<?php

namespace App\Repository;

use App\Entity\Card;
use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use PhpParser\Node\Stmt\TraitUseAdaptation\Alias;

/**
 * @extends ServiceEntityRepository<Card>
 */
class CardRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Card::class);
    }

    public function _BestSeller_()
    {
        try {
            return $this->createQueryBuilder('p')
                ->select('p', 'SUM(c.quantity) as totalQuantity')
                ->join('p.card', 'c')
                ->groupBy('p.id')
                ->orderBy('totalQuantity', 'DESC')
                ->setMaxResults(10) // Limite aux 10 meilleurs vendeurs
                ->getQuery()
                ->getResult();
        } catch (\Exception $e) {
            return [];
        }
    }

    public function getPanier(int $idUtilisateur)
    {
        return $this->createQueryBuilder('c')
        ->select('p.id AS productId, p.libele AS productLabel, p.prix AS productPrice, p.ImageUrl AS productImage, SUM(c.quantity) AS totalQuantity')
        ->innerJoin(Product::class, 'p', 'WITH', 'p.id = c.idProduit')
        ->where('c.idUtilisateur = :idUtilisateur')
        ->andWhere('c.statut = 0')
        ->groupBy('p.id, p.libele, p.prix, p.ImageUrl')
        ->setParameter('idUtilisateur', $idUtilisateur)
        ->getQuery()
        ->getResult();
    }

    public function compteur(int $idUtilisateur): int
    {
        try {
            return (int) $this->createQueryBuilder('c')
                ->select('SUM(c.quantity)')
                ->where('c.idUtilisateur = :idUtilisateur')
                ->andWhere('c.statut = 0') // Panier actif
                ->setParameter('idUtilisateur', $idUtilisateur)
                ->getQuery()
                ->getSingleScalarResult();
        } catch (\Exception $e) {
            // Log the exception or handle it as needed
            return 0; // Default value in case of error
        }
    }


    public function findUserOrders(int $idUtilisateur): array
    {
        try {
            return $this->createQueryBuilder('c')
                ->select('p.libele, p.prix, p.type_produit, p.section, c.created_at, c.quantity, (p.prix * c.quantity) AS total_transaction')
                ->join('c.product', 'p')
                ->where('c.idUtilisateur = :idUtilisateur')
                ->andWhere('c.statut = 1') // Commandes validées
                ->setParameter('idUtilisateur', $idUtilisateur)
                ->orderBy('c.created_at', 'DESC')
                ->getQuery()
                ->getResult();
        } catch (\Exception $e) {
            // Log the exception or handle it as needed
            return []; // Valeur par défaut en cas d'erreur
        }
    }

    public function findUserTransactions($userId)
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = '
            SELECT p.libele, p.prix, p.type_produit, p.section, c.created_at, c.quantity, 
                   (p.prix * c.quantity) AS total_transaction
            FROM product p
            JOIN card c ON p.id = c.id_produit
            WHERE c.id_utilisateur = :userId
            AND c.statut = 1
            ORDER BY c.created_at DESC
        ';

        $stmt = $conn->prepare($sql);
        $resultSet = $stmt->executeQuery(['userId' => $userId]);

        // Utiliser fetchAllAssociative pour récupérer les résultats
        return $resultSet->fetchAllAssociative();
    }

    public function RenouvApresAchat(int $idUtilisateur, int $idProduit, int $quantity): void
    {
        // Récupérer la carte correspondant à l'utilisateur et au produit
        $card = $this->entityManager->getRepository(Card::class)->findOneBy([
            'idUtilisateur' => $idUtilisateur,
            'idProduit' => $idProduit,
        ]);

        if ($card) {
            // Mettre à jour la quantité et le statut
            $card->setQuantity($card->getQuantity() - $quantity);
            $card->setStatut(true); // Par exemple, true pour indiquer que l'achat est validé

            // Enregistrer les modifications
            $this->entityManager->flush();
        } else {
            throw new \Exception("Carte non trouvée pour l'utilisateur et le produit spécifiés.");
        }
    }
    
}
