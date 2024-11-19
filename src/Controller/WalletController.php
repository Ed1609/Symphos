<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Wallet;
use App\Repository\WalletRepository;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Controller\PaymentController;
use App\Entity\Card;

class WalletController extends AbstractController
{

    #[Route('/walletpaie', name: 'app_walletpaie')]
    public function index(Request $request, WalletRepository $walletRepository, SessionInterface $session, EntityManagerInterface $entityManager): Response
    {
        // Récupération des informations de la session
        $session = $request->getSession();
        $utilisateur = $session->get('utilisateur');
        $solde = $session->get('solde');
        $total = $session->get('total');
    
        // Si l'utilisateur est connecté
        if ($utilisateur) {
            $idUtilisateur = $utilisateur['idUtilisateur'];

            // Recherche du wallet (portefeuille) de l'utilisateur
            $wallet = $walletRepository->findOneBy(['IdUtilisateur' => $idUtilisateur]);
    
            // Vérification si le wallet existe
            if (!$wallet) {
                $this->addFlash('error', "Une erreur s'est produite. Portefeuille introuvable.");
                error_log("Aucun wallet disponible pour l'utilisateur $idUtilisateur");
                return $this->redirectToRoute('profil'); // Redirection après erreur
            }
    
            // Vérification du solde par rapport au total
            if ($solde < $total) {
                $this->addFlash('error', 'Solde insuffisant pour effectuer le paiement.');
                error_log("Utilisateur: $idUtilisateur - solde insuffisant.");
                return $this->redirectToRoute('profil'); // Redirection après erreur
            }
    
            // Définir le fuseau horaire et obtenir la date actuelle
            date_default_timezone_set('Africa/Brazzaville');
            $date = new \DateTimeImmutable();
    
            // Calcul du solde restant
            $reste = $solde - $total;

            // Mise à jour du wallet
            $wallet->setSolde($reste);
            $wallet->setIdUtilisateur($idUtilisateur); // Redondant si déjà défini lors de la création
            $wallet->setAddAt($date);
    
            // Persistance du wallet mis à jour
            $entityManager->persist($wallet);
            $entityManager->flush();
    
            // Traitement du panier (cart) et mise à jour des cartes associées
            $cart = $session->get('cart', []);
    
            foreach ($cart as $items) {
                // Recherche de la carte associée au produit et à l'utilisateur
                $card = $entityManager->getRepository(Card::class)->findOneBy([
                    'idProduit' => $items['productId'],
                    'statut'=> 0,
                    'idUtilisateur' => $idUtilisateur
                ]);
    
                // Si la carte est trouvée, mise à jour du statut
                if ($card) {
                    $card->setStatut(true); // Statut à true pour indiquer l'achat validé
                    $entityManager->flush();
                } else {
                    // Log en cas de carte non trouvée
                    error_log("Carte non trouvée pour le produit ID: ".$items['productId']." et l'utilisateur ID: $idUtilisateur");
                }
            }
    
            // Suppression des données inutiles de la session après le paiement
            $session->remove('total');
            $session->remove('solde');
    
            // Ajout d'un message de succès
            $this->addFlash('success', 'Paiement effectué avec succès.');
    
            // Redirection vers le profil de l'utilisateur
            return $this->redirectToRoute('profil');
    
        } else {
            // Redirection vers la page de connexion si l'utilisateur n'est pas connecté
            return $this->redirectToRoute('l_ogin');
        }
    }

    



    //Fonction pour crediter le wallet methode post

    #[Route('/recharge', name: 'recharge.compte', methods: ["POST"])]
    public function inde(Request $request, WalletRepository $walletRepository,PaymentController $paymentController, SessionInterface $session, EntityManagerInterface $entityManager): Response
    {
        $session = $request->getSession();
        $utilisateur = $session->get('utilisateur');
        $solde = $session->get('solde');
    
        if ($utilisateur) {
            $idUtilisateur = $utilisateur['idUtilisateur'];
            $wallet = $walletRepository->findOneBy(['IdUtilisateur' => $idUtilisateur]);
    
            $montant = filter_var($request->request->get('montant'), FILTER_SANITIZE_STRING);
            $numero = filter_var($request->request->get('numero'), FILTER_SANITIZE_STRING);
            //$address = filter_var($request->request->get('adresse'), FILTER_SANITIZE_STRING);
    
            if (!$wallet) {
                $wallet = new Wallet();
                $wallet->setIdUtilisateur($idUtilisateur);
            }

            //Effectuer la recharge
            $result = $paymentController ->functionApI($numero,$montant);
            
            if(isset($result['error']))
            {
                $wallet->setSolde(0);
                $this->addFlash('error', $result['error']);
            }
            
            date_default_timezone_set('Africa/Brazzaville'); //fuseau horaire
            $date = new \DateTimeImmutable();//Definir la date

            $montantcompte = $solde;
            //dd($montantcompte+ $montant);
            $toto = $montantcompte + $montant;
            $wallet->setSolde($toto);
            $wallet->setIdUtilisateur($idUtilisateur);
            $wallet->setAddAt($date);

            $entityManager->persist($wallet);
            $entityManager->flush();
            $session->remove('solde');
    
            $this->addFlash('success', 'Portefeuille mise a jour avec succes.');
    
            return $this->redirectToRoute('profil');
        } else {
            return $this->redirectToRoute('l_ogin');
        }
    }



    #[Route('/wallet', name: 'app.wallet')]
    function collecteur(SessionInterface $Session,Request $request)
    {
       $Session = $request->getSession();
       $utilisateur = $Session->get('utilisateur');
       if($utilisateur)
       {
            return $this->render('wallet/index.html.twig');
       } 

       return $this->redirectToRoute('page.introuvable');
    }

}
