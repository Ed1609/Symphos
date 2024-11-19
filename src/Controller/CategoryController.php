<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class CategoryController extends AbstractController
{
    #[Route('/category/{category}', name: 'all-product', requirements: ['category' => '[a-zA-Z0-9\-]+'])]
    public function index(SessionInterface $session,ProductRepository $productRepository, Request $request,string $category = '')
    {
        $produitsParPage = $request->query->getInt('produitsParPage', 10);
        $pageActuelle = $request->query->getInt('page', 1);
        // Récupération de l'utilisateur depuis la session
        $utilisateur = $session->get('utilisateur');
        $idUtilisateur = $utilisateur['idUtilisateur'] ?? null;
    
        // Fetch total number of products
        $total = $productRepository->countAllProducts();
        $nombreDePages = ceil($total / $produitsParPage);
    
        if ($pageActuelle > $nombreDePages) {
            $pageActuelle = $nombreDePages;
        } elseif ($pageActuelle < 1) {
            $pageActuelle = 1;
        }
    
        $premiereEntree = ($pageActuelle - 1) * $produitsParPage;
    
        // Adjust query based on category
        $products = match ($category) {
            'men' => $productRepository->findByCategory('Homme', $produitsParPage, $premiereEntree),
            'Femme' => $productRepository->findByCategory('Femme', $produitsParPage, $premiereEntree),
            'accessories' => $productRepository->findByType('accessoire', $produitsParPage, $premiereEntree),
            'new_arrivals' => $productRepository->findNewArrivals($produitsParPage, $premiereEntree),
            'collection' => $productRepository->findCollection($produitsParPage, $premiereEntree),
            'Boutique' => $productRepository->findBoutique($produitsParPage, $premiereEntree),
            'promotion' => $productRepository->findPromotions($produitsParPage, $premiereEntree),
            default => $productRepository->findAllWithPagination($produitsParPage, $premiereEntree),
        };
    
        return $this->render('category/index.html.twig', [
            'products' => $products,
            'category' => $category,
            'nombreDePages' => $nombreDePages,
            'pageActuelle' => $pageActuelle,
            'produitsParPage' => $produitsParPage,
            'total' => $total,
            'user' => $idUtilisateur
        ]);
    }
}
