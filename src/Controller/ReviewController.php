<?php

namespace App\Controller;

use App\Entity\Review;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Entity\Utilisateur;


class ReviewController extends AbstractController
{
    #[Route('/review', name: 'add_review',methods: ["POST"])]
    public function index(Request $request, SessionInterface $session, EntityManagerInterface $entityManager): JsonResponse
    {
        $session = $request->getSession();
        $user = $session->get('utilisateur');
    
        if ($user) {
            $IdUser = $user['idUtilisateur'];
            $u = $entityManager->getRepository(Utilisateur::class)->find($IdUser);

            if (!$user) {
                throw $this->createNotFoundException('Utilisateur introuvable');
            }
            $IdProduit = filter_var($request->request->get('IdProduit'), FILTER_SANITIZE_STRING);
            $message = filter_var($request->request->get('message'), FILTER_SANITIZE_STRING);
    
            $commentaire = new Review();
            $commentaire->setContent($message);
            $commentaire->setIdProduit($IdProduit);
            $commentaire->setUser($u);
            $commentaire->setCreatedAt(new \DateTimeImmutable());
    
            $entityManager->persist($commentaire);
            $entityManager->flush();
    
            return new JsonResponse([
                'status' => 'success'
            ], Response::HTTP_OK);
        } else {
            return new JsonResponse([
                'status' => 'error',
                'message' => 'Vous devez être connecté pour ajouter un commentaire.'
            ], Response::HTTP_UNAUTHORIZED);
        }
    }
}
