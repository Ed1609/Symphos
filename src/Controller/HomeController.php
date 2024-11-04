<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\CardRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProductRepository;
use App\Repository\PromoDynamiqueRepository;

class HomeController extends AbstractController
{
    #[Route('/', name: 'Accueil')]
    public function index(ProductRepository $productRepository, CardRepository $cardRepository, PromoDynamiqueRepository $promoDynamique): Response
    {
        $articlefemmes = $productRepository-> _touslesarticlesfemmes_();
        $articlehommes = $productRepository -> _touslesarticleshommes_();
        $accessoires = $productRepository -> _touslesaccessoires_();
        $BestSeller = $cardRepository -> _BestSeller_();
        $EnPromotion = $productRepository -> _enPromotion_();
        $promoDynamique = $promoDynamique -> _PromotionDynamique_();

        return $this->render('home/index.html.twig', [
            'femme' => $articlefemmes,
            'homme' => $articlehommes,
            'accessoire' => $accessoires,
            'BestSeller'=> $BestSeller,
            'EnPromotion'=> $EnPromotion,
            'promoDynamique'=> $promoDynamique

        ]);
    }

    #[Route('/admin', name: 'app_back')]
    public function admin(): Response
    {
        return $this->render('home/admin.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

        // Fonction de traitement de la durée des promotions
        #[Route('/promotion', name: 'Duree.promo')]
        public function DureePromo(Request $request, PromoDynamiqueRepository $promoDynamiqueRepository): Response
        {
            // Supposons que vous ayez une entité PromoDynamique qui contient la durée de la promotion.
            $promoId = 1;
            $promo = $promoDynamiqueRepository->find($promoId);
            $dureePromo = $promo->getDureeJour(); // Supposons que la durée soit en jours.
            // Vérifier si l'utilisateur est connecté
            if ($this->getUser()) {
                // Lire les cookies depuis l'objet Request
                $cookies = $request->cookies;
                
                // Récupérer les données des cookies si elles existent
                $jourRestant = $cookies->get('jour', $dureePromo);
                $heuresRestantes = $cookies->get('heures', 0);
                $minutesRestantes = $cookies->get('minutes', 0);
                $secondesRestantes = $cookies->get('secondes', 0);
                
                // Retourner les données restantes
                return$this->render('home/index.html.twig', [
                    'jours' => $jourRestant,
                    'heures' => $heuresRestantes,
                    'minutes' => $minutesRestantes,
                    'secondes' => $secondesRestantes,
                ]);
            }
        
            return$this->render('home/index.html.twig', []);
        }
    
        //Fonction de mise a jour des cookie dans la BD et dans le navigateur.
    
        #[Route('/accesCookie', name: 'update.cookie')]
        public function cookies(PromoDynamiqueRepository $promoDynamiqueRepository): JsonResponse
        {
            $tempsRestant = $this->calculerTempsRestant($promoDynamiqueRepository); // Retourne un tableau avec jours, heures, minutes, secondes.
            // Mettre à jour les cookies
            $response = new JsonResponse($tempsRestant); // Retourne les données des cookies sous forme JSON
            $response->headers->setCookie(new Cookie('jour', $tempsRestant['jours'], time() + (86400 * $tempsRestant['jours'])));
            $response->headers->setCookie(new Cookie('heures', $tempsRestant['heures'], time() + (3600 * $tempsRestant['heures'])));
            $response->headers->setCookie(new Cookie('minutes', $tempsRestant['minutes'], time() + (60 * $tempsRestant['minutes'])));
            $response->headers->setCookie(new Cookie('secondes', $tempsRestant['secondes'], time() + $tempsRestant['secondes']));
        
            return $response;
        }
        
    
        //FOnction de calcul du temps restant de la promo pour un user
        #[Route('/calcul', name: 'Temps.promo')]
        private function calculerTempsRestant(PromoDynamiqueRepository $promoDynamiqueRepository): array
        {
            $promoId = 1; // Remplacez par l'ID réel de la promotion
            $promo = $promoDynamiqueRepository->find($promoId);
    
            if ($promo) {
                $dureePromo = $promo->getDureeJour();
                $dateCreation = $promo->getCreatedAt();
                $dateFin = (clone$dateCreation)->modify("+{$dureePromo} days");
                $maintenant = new \DateTimeImmutable();
    
                $interval = $maintenant->diff($dateFin);
    
                return [
                    'jours' => $interval->days,
                    'heures' => $interval->h,
                    'minutes' => $interval->i,
                    'secondes' => $interval->s,
                ];
            }
    
            return [
                'jours' => 0,
                'heures' => 0,
                'minutes' => 0,
                'secondes' => 0,
            ];
        }
}
