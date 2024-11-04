<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Repository\CardRepository;
use App\Repository\LivraisonRepository;
use App\Repository\WalletRepository;
use App\Entity\Utilisateur;

class UserController extends AbstractController
{
    #[Route('/profil', name:'profil')]
    public function index(CardRepository $cardRepository,LivraisonRepository $livraisonRepository,Request $request, SessionInterface $session, WalletRepository $walletRepository): Response
    {
        $session = $request->getSession();
        $user = $session->get('utilisateur');

        if (!$user) {
            return $this->redirectToRoute('l_ogin');
        }

        $orders = $cardRepository->findUserTransactions($user['idUtilisateur']);
        $livraison = $livraisonRepository->findOneBy(['idUtilisateur' => $user]);
        $wallet = $walletRepository ->findOneBy(['IdUtilisateur' => $user]);
        $caisse = $wallet->getSolde();
        $session->set('solde',$caisse);
        $date = $wallet->getAddAt();
        $dateString = $date->format('d-m-y H:i:s');
    
        return $this->render('user/index.html.twig', [
            'user' => $user,
            'orders' => $orders,
            'parametre'=>$livraison,
            'wallet'=>$wallet,
            'date'=>$dateString,
        ]);
    }


    #[Route('/contact', name: 'user.contact')]
    public function contact(): Response
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }
}
