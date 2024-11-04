<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Repository\CardRepository;
use Doctrine\ORM\EntityManagerInterface;

class NavbarController extends AbstractController
{
    private CartController $cartController;

    public function __construct(CartController $cartController)
    {
        $this->cartController = $cartController; // Injection du CartController
    }

    #[Route('/navbar', name: 'app_navbar')]
    public function navbar(Request $request, SessionInterface $session, CardRepository $cardRepository): Response
    {
        $user = $session->get('utilisateur');
    
        if ($user) {
            $prenomUtilisateur = $user['firstname'] ?? 'Non défini';
            $nomUtilisateur = $user['name'] ?? 'Non défini';
            $emailUtilisateur = $user['email'] ?? 'Non défini';
            $idUtilisateur = $user['idUtilisateur'] ?? 'Non défini';
            
            try {
                $totalProducts = $cardRepository->compteur(($user['idUtilisateur']));
            } catch (\Exception $e) {
                $totalProducts = 0; // Default value in case of error
            }
    
            return $this->render('_navbar.html.twig', [
                'PrenomUtilisateur' => $prenomUtilisateur,
                'NomUtilisateur' => $nomUtilisateur,
                'EmailUtilisateur' => $emailUtilisateur,
                'IdUtilisateur' => $idUtilisateur,
                'cart_quantity' => $totalProducts,
            ]);
        }
    
        return $this->render('navbar.html.twig');
    }
}
