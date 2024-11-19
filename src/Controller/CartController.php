<?php

namespace App\Controller;

use App\Entity\Card;
use App\Entity\Product;
use App\Repository\CardRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use Symfony\Component\Security\Csrf\CsrfToken;
use App\Repository\WalletRepository;


class CartController extends AbstractController
{
    private CardRepository $cardRepository;
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager, CardRepository $cardRepository)
    {
        $this->cardRepository = $cardRepository;
        $this->entityManager = $entityManager;
        
    }

    #[Route('/cart', name: 'app_cart')]
    public function index(Request $request, CardRepository $cardRepository,WalletRepository $walletRepository,SessionInterface $session): Response
    {
        $session = $request->getSession();
        $utilisateur = $session->get('utilisateur');
        
        $solde = $session->get('solde');
    
        if ($utilisateur) {
            $idUtilisateur = $utilisateur['idUtilisateur'];
    
            $wallet = $walletRepository->findOneBy(['IdUtilisateur' => $idUtilisateur]);
            $caisse = $wallet->getSolde();
            $session->set('solde',$caisse);
            
            // Récupère le panier de l'utilisateur
            $result = $cardRepository->getPanier($idUtilisateur);
            /*

            $cart = array_map(function($prod) {
                return $prod['productId'];
            }, $result);*/
            
            $session = $request->getSession();
            $session->set('cart',$result);
            
            // Calcule le total du panier
            
            $total = array_reduce($result, function ($carry, $item) {
                return $carry + ($item['productPrice'] * $item['totalQuantity']);
            }, 0);

            
            $session->set('total',$total);
            // Passe les données au template
            return $this->render('cart/index.html.twig', [
                'cart' => $result,   // Données du panier
                'total' => $total,   // Total calculé
                'wallet'=>$solde,
            ]);
    
        } else {
            // Redirige vers la page d'accueil si l'utilisateur n'est pas connecté
            return $this->redirectToRoute('l_ogin');
        }
    }


    #[Route('/add-card/{quantity}/{idUtilisateur}/{idProduit}', name: 'add_card')]
    public function addCard(Request $request,SessionInterface $session,int $quantity,$idUtilisateur, int $idProduit): Response
    {
        error_log('Valeur de idUtilisateur avant conversion: ' . $idUtilisateur);
        
        $idUtilisateur = (int) $idUtilisateur;
        $statut = 0;
        $card = new Card();
        $card->setQuantity($quantity);
        $card->setidUtilisateur($idUtilisateur);
        $card->setidProduit($idProduit);
        $card->setStatut($statut);
        $this->entityManager->persist($card); 
        $this->entityManager->flush(); 
        $referer = $request->headers->get('referer');

    if ($referer) {
        return new RedirectResponse($referer);
    }

    // Redirection vers une route par défaut si la page précédente n'est pas disponible
    return $this->redirectToRoute('/'); // Remplacez 'homepage' par la route souhaitée

    }

    

    #[Route('/cart/quantity', name: 'cart_quantity', methods: ['GET'])]
    public function getCartQuantity(SessionInterface $session): JsonResponse
    {
        // Récupérer la quantité de produits non achetés depuis la session
        $quantity = $session->get('qte', 0);

        return new JsonResponse(['qte' => $quantity]);
    }
    

    #[Route('/delete-product/{id_produit}', name: 'delete_product', methods: ['POST'])]
    public function deleteProduct(int $id_produit, Request $request, EntityManagerInterface $em, CsrfTokenManagerInterface $csrfTokenManager): Response
    {
        // Debug: Affichez les données reçues dans la requête
        dump($request->request->all()); // Vérifiez que les données sont correctement transmises

        $csrfToken = new CsrfToken('delete', $request->request->get('_token'));
        if (!$csrfTokenManager->isTokenValid($csrfToken)) {
            return $this->json(['error' => 'Invalid CSRF token.'], Response::HTTP_FORBIDDEN);
        }

        $session = $request->getSession();
        $utilisateur = $session->get('utilisateur');

        if (!$utilisateur) {
            return $this->json(['error' => 'User not logged in.'], Response::HTTP_UNAUTHORIZED);
        }

        try {
            // Debug: Affichez l'utilisateur et le produit pour vérification
            //dump($utilisateur, $id_produit);

            $achat = $em->getRepository(Card::class)->findOneBy([
                'idUtilisateur' => $utilisateur,
                'idProduit' => $id_produit,
                'statut' => 0
            ]);

            if ($achat) {
                $em->remove($achat);
                $em->flush();

                return $this->json(['success' => 'Product deleted successfully.']);
            }

            return $this->json(['error' => 'Product not found or already processed.'], Response::HTTP_NOT_FOUND);
        } catch (\Exception $e) {
            return $this->json(['error' => 'An error occurred: ' . $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }



    #[Route('/cart/quantity', name: 'cart_quantity')]
    public function countUserCartItems(Request $request, EntityManagerInterface $em): Response
    {
        // Vérifier que la session utilisateur est disponible
        $session = $request->getSession();
        $userId = $session->get('idUtilisateur'); // Utilisez 'user_id' comme clé de session

        if (!$userId) {
            return $this->json(['error' => 'User not logged in.'], Response::HTTP_UNAUTHORIZED);
        }

        // Rechercher la quantité totale des achats pour l'utilisateur avec un statut = 0
        $qb = $em->createQueryBuilder();
        $qb->select('COUNT(c.id) AS total')
            ->from(Card::class, 'c')
            ->where('c.idUtilisateur = :idUtilisateur')
            ->andWhere('c.statut = 0')
            ->setParameter('idUtilisateur', $userId);

        $total = $qb->getQuery()->getSingleScalarResult();

        // Mettre à jour la session avec la quantité totale
        $session->set('qte', $total);

        return $this->json(['total' => $total]);
    }


    public function compteur(Request $request, EntityManagerInterface $em): Response
    {
        // Vérifier que la session utilisateur est disponible
        $session = $request->getSession();
        $userId = $session->get('idUtilisateur'); // Utilisez 'user_id' comme clé de session
        // Rechercher la quantité totale des achats pour l'utilisateur avec un statut = 0
        $qb = $em->createQueryBuilder();
        $qb->select('COUNT(c.id) AS total')
            ->from(Card::class, 'c')
            ->where('c.idUtilisateur = :idUtilisateur')
            ->andWhere('c.statut = 0')
            ->setParameter('idUtilisateur', $userId);

        $total = $qb->getQuery()->getSingleScalarResult();

        return $this->$total;
    }

    /*public function addToCart(int $idProduit,SessionInterface $session): void
    {
        $cart = $session->get('cart', []);
        $cart[] = $idProduit;
        $session->set('cart', $cart);
    }*/

}

