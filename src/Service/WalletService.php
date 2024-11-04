<?php

namespace Src\Service;
use App\Repository\CardRepository;
use App\Entity\Wallet;
use App\Repository\WalletRepository;
use Doctrine\ORM\EntityManagerInterface;

class WalletService
{
    private $walletRepository;
    private $entityManager;

    public function __construct(WalletRepository $walletRepository, EntityManagerInterface $entityManager)
    {
        $this->walletRepository = $walletRepository;
        $this->entityManager = $entityManager;
    }

    public function updateWallet($idUtilisateur, $total): bool
    {
        $wallet = $this->walletRepository->findOneBy(['IdUtilisateur' => $idUtilisateur]);
        if (!$wallet) {
            return false; // Handle error case
        }

        // Mettre à jour le solde et la date
        $solde = $wallet->getSolde();
        if ($solde < $total) {
            return false; // Solde insuffisant
        }

        $reste = $solde - $total;
        $wallet->setSolde($reste);
        $wallet->setAddAt(new \DateTimeImmutable());
        
        $this->entityManager->persist($wallet);
        $this->entityManager->flush();
        return true;
    }
}
