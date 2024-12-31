<?php

namespace App\EventListener;

use Symfony\Component\EventDispatcher\Attribute\AsEventListener;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\KernelEvents;

final class PreviousPageListener
{
    private $session;

    public function __construct(RequestStack $requestStack)
    {
        // Assurez-vous que la session est disponible
        $this->session = $requestStack->getSession();
    }

    public function onKernelRequest(RequestEvent $event): void
    {
        $request = $event->getRequest();

        // Vérifiez si la session est activée
        if (!$request->hasSession() || !$this->session->isStarted()) {
            return; // Ignorer si aucune session n'est disponible
        }

        $excludedRoutes = ['app_login', 'app_logout'];
        $currentRoute = $request->attributes->get('_route');

        if (!in_array($currentRoute, $excludedRoutes, true) && !$request->isXmlHttpRequest()) {
            $this->session->set('_previous_page', $request->getUri());
        }
        
    }
}