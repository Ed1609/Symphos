<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class ProductController extends AbstractController
{
    #[Route('/product/{slug}-{id}', name: 'product.show', requirements: ['id' => '\d+', 'slug' => '[a-zA-Z0-9\-]+'])]
    public function index(ProductRepository $productRepository, Request $request, int $id, string $slug, SessionInterface $session): Response
    {
        // Récupération du produit par ID
        $product = $productRepository->find($id);
        //dd($product);

        // Vérification si le produit existe
        if (!$product) {
            throw $this->createNotFoundException('Produit non trouvé.');
        }

        // Vérifiez que le slug correspond à celui du produit pour éviter les erreurs
        if ($product->getSlug() !== $slug) {
            return $this->redirectToRoute('product.show', [
                'id' => $product->getId(),
                'slug' => $product->getSlug(),
            ], 301); // Redirection permanente si le slug est incorrect
        }

        // Récupération de l'utilisateur depuis la session
        $utilisateur = $session->get('utilisateur');
        $idUtilisateur = $utilisateur['idUtilisateur'] ?? null;

        // Passer le produit et l'utilisateur à la vue
        return $this->render('product/index.html.twig', [
            'instance' => $product,
            'user' => $idUtilisateur,
        ]);
    }
}