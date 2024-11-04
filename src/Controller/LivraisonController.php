<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Entity\Livraison;
use App\Repository\LivraisonRepository;
use Doctrine\ORM\EntityManagerInterface;

class LivraisonController extends AbstractController
{
    #[Route('/livraison', name: 'livraison', methods: ["POST"])]
    public function index(Request $request, LivraisonRepository $livraisonRepository, SessionInterface $session, EntityManagerInterface $entityManager): Response
    {
        $session = $request->getSession();
        $utilisateur = $session->get('utilisateur');
    
        if ($utilisateur) {
            $idUtilisateur = $utilisateur['idUtilisateur'];
            $livraison = $livraisonRepository->findOneBy(['idUtilisateur' => $idUtilisateur]);
    
            $frequence = filter_var($request->request->get('frequence'), FILTER_SANITIZE_STRING);
            $produit = filter_var($request->request->get('produit'), FILTER_SANITIZE_STRING);
            $address = filter_var($request->request->get('adresse'), FILTER_SANITIZE_STRING);
    
            if (!$livraison) {
                $livraison = new Livraison();
                $livraison->setIdUtilisateur($idUtilisateur);
            }
    
            $livraison->setAdresseUtilisateur($address);
            $livraison->setProduit($produit);
            $livraison->setFrequenceLivraison($frequence);
    
            $entityManager->persist($livraison);
            $entityManager->flush();
    
            $this->addFlash('success', 'Les informations de livraison ont été mises à jour.');
    
            return $this->redirectToRoute('profil');
        } else {
            return $this->redirectToRoute('l_ogin');
        }
    }
}
