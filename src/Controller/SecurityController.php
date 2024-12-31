<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Repository\WalletRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class SecurityController extends AbstractController
{
    #[Route(path: '/login', name: 'l_ogin')]
    public function login(Request $request, ManagerRegistry $manager, SessionInterface $session, UserPasswordHasherInterface $passwordHasher, WalletRepository $walletRepository): Response
    {
        $session = $request->getSession();
        $user = $session->get('utilisateur');
    
        // Vérification de la connexion
        if ($user) {
            // Vérifier si une page précédente est stockée dans la session
            $previousPage = $session->get('_previous_page', null);
            return $this->redirect($previousPage ?? $this->generateUrl('Accueil'));
        }
    
        // Si non connecté, gérer la soumission du formulaire
        if ($request->isMethod('POST')) {
            $email = $request->request->get('email');
            $password = $request->request->get('password');
            $user = $manager->getRepository(Utilisateur::class)->findOneBy(['email' => $email]);
    
            if ($user && $passwordHasher->isPasswordValid($user, $password)) {
                // Stockage dans la session
                $sessionData = [
                    'idUtilisateur' => $user->getId(),
                    'email' => $user->getEmail(),
                    'name' => $user->getNom(),
                    'firstname' => $user->getPrenom(),
                    'role' => $user->getRoles(),
                ];
                $session->set('utilisateur', $sessionData);
    
                // Vérification du portefeuille
                $wallet = $walletRepository->findOneBy(['IdUtilisateur' => $user->getId()]);
                if ($wallet) {
                    $session->set('solde', $wallet->getSolde());
                }
    
                // Création du cookie utilisateur
                $cookie = new Cookie(
                    'utilisateur',
                    json_encode(['idUtilisateur' => $user->getId(), 'role' => $user->getRoles()]),
                    time() + 3600, // Expiration : 1 heure
                    '/',
                    null,
                    true, // Utiliser HTTPS uniquement
                    true, // Accessible uniquement via HTTP (pas JS)
                    false,
                    Cookie::SAMESITE_STRICT
                );
    
                // Créer une réponse et ajouter le cookie
                $response = new JsonResponse(['success' => true]);
    
                $response->headers->setCookie($cookie);
                return $response;
            } else {
                // Retourner une erreur JSON
                return new JsonResponse(['success' => false, 'message' => 'Email ou mot de passe incorrect.'], Response::HTTP_UNAUTHORIZED);
            }
        }
    
        // Si non connecté, afficher la page de connexion
        return $this->render('security/login.html.twig');
    }

//Deuxieme page de connexion 
    public function login_first(Request $request,ManagerRegistry $manager,SessionInterface $session,UserPasswordHasherInterface $passwordHasher,WalletRepository $walletRepository): Response
    {
        $session = $request->getSession();
        $user = $session->get('utilisateur');
    
        // Vérification de la connexion
        if ($user) {
            // Vérifier si une page précédente est stockée dans la session
            $previousPage = $session->get('_previous_page', null);
            return $this->redirect($previousPage ?? $this->generateUrl('Accueil'));
        }
    
        // Si non connecté, gérer la soumission du formulaire
        if ($request->isMethod('POST'))
        {
            $email = $request->request->get('email');$password = $request->request->get('password');
            $user = $manager->getRepository(Utilisateur::class)->findOneBy(['email' => $email]);
    
            if ($user && $passwordHasher->isPasswordValid($user, $password)) {
                // Stockage dans la session
                $sessionData = [
                    'idUtilisateur' => $user->getId(),
                    'email' => $user->getEmail(),
                    'name' => $user->getNom(),
                    'firstname' => $user->getPrenom(),
                    'role' => $user->getRoles(),
                ];
                $session->set('utilisateur', $sessionData);
    
                // Vérification du portefeuille
                $wallet = $walletRepository->findOneBy(['IdUtilisateur' => $user->getId()]);
                if ($wallet) {
                    $session->set('solde', $wallet->getSolde());
                }
    
                // Création du cookie utilisateur
                $cookie = new Cookie(
                    'utilisateur',
                    json_encode(['idUtilisateur' => $user->getId(), 'role' => $user->getRoles()]),
                    time() + 3600, // Expiration : 1 heure
                    '/',
                    null,
                    true, // Utiliser HTTPS uniquement
                    true, // Accessible uniquement via HTTP (pas JS)
                    false,
                    Cookie::SAMESITE_STRICT
                );
    
                // Créer une réponse et ajouter le cookie
                $response = $this->redirectToRoute(
                    in_array('ROLE_ADMIN', $user->getRoles(), true) ? 'app_back' : 'Accueil'
                );
                $response->headers->setCookie($cookie);
    
                return $response;
            } else {
                // Gestion d'erreur
                $this->addFlash('error', 'Email ou mot de passe incorrect.');
            }
        }
    
        // Si non connecté, afficher la page de connexion
        return $this->render('security/login.html.twig');
    }

    //End of the login page


    #[Route( '/logout', 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
