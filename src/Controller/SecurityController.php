<?php

namespace App\Controller;
use App\Entity\Utilisateur;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request; 
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class SecurityController extends AbstractController
{
    #[Route(path: '/login', name: 'l_ogin')]
    public function login(Request $request, ManagerRegistry $manager, SessionInterface $session, UserPasswordHasherInterface $passwordHasher): Response
    {
        if ($request->isMethod('POST')) {
            $email = $request->request->get('email');
            $password = $request->request->get('password');
    
            $user = $manager->getRepository(Utilisateur::class)->findOneBy(['email' => $email]);
    
            if ($user && $passwordHasher->isPasswordValid($user, $password)) {
                $session = $request->getSession();
                $session->set('utilisateur', ['idUtilisateur' => $user->getId(), 'email' => $user->getEmail(),'name' => $user->getnom(), 'firstname' => $user->getPrenom(), 'role' => $user->getRoles()]);
                //setcookie(new Cookie('utilisateur', ['idUtilisateur' => $user->getId(), 'email' => $user->getEmail(),'name' => $user->getnom(), 'firstname' => $user->getPrenom(), 'role' => $user->getRoles()],6975);
                return $this->redirectToRoute($user->getRoles() == 'Admin' ? 'app_back' : 'Accueil');
            } else {
                $this->addFlash('error', 'Email ou mot de passe incorrect.');
            }
        }
    
        return $this->render('security/login.html.twig', []);
    }

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
