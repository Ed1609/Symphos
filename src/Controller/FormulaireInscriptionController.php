<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Form\RegistrationType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Request; 
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class FormulaireInscriptionController extends AbstractController
{
    #[Route('/form', name: 'register')]
    public function createUser(Request $request, EntityManagerInterface $entityManager, UserPasswordHasherInterface $passwordHasher): Response
    {
        $user = new Utilisateur();
    
        $form = $this->createForm(RegistrationType::class, $user);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) 
        {
            // Récupérer les données du formulaire
            $email = $form->get('email')->getData();
            $existingUser = $entityManager->getRepository(Utilisateur::class)->findOneBy(['email' => $email]);
            $plainPassword = $form->get('password')->getData();
            $confirmPassword = $form->get('confirm_password')->getData();
    
            if ($plainPassword === $confirmPassword) 
            {
                if ($existingUser) 
                {
                    $this->addFlash('Verify_email_error', 'Cet adresse email est déjà utilisé');
                    return $this->render('formulaire_inscription/index.html.twig', [
                        'form' => $form->createView(),
                    ]);
                }
                
                // Hacher le mot de passe avant de le sauvegarder
                $hashedPassword = $passwordHasher->hashPassword($user, $plainPassword);
                $user->setPassword($hashedPassword);
                
                // Sauvegarder l'utilisateur
                $entityManager->persist($user);
                $entityManager->flush();
                
                return $this->redirectToRoute('l_ogin'); // Change to your desired route
            } 
            else 
            {
                $this->addFlash('verify_password_error', 'Le mot de passe ne correspond pas');
            }
        }
    
        return $this->render('formulaire_inscription/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
