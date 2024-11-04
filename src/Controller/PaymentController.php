<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Card;
use Symfony\Component\HttpFoundation\JsonResponse;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Client;

class PaymentController extends AbstractController
{
    private $httpClient;
    private $entityManager;
    private $client;
    private $headers;

    public function __construct(HttpClientInterface $httpClient, EntityManagerInterface $entityManager)
    {
        // Vérification des variables d'environnement
        if (!isset($_ENV['AIRTEL_ACCESS_TOKEN'], $_ENV['AIRTEL_SIGNATURE'], $_ENV['AIRTEL_KEY'])) {
        throw new \Exception('Les variables d\'environnement Airtel sont manquantes.');
        }

        $this->httpClient = $httpClient;
        $this->entityManager = $entityManager;
        $this->client = new Client();
        $this->headers = [
            'Accept' => '*/*',
            'Content-Type' => 'application/json',
            'X-Country' => 'CGB',
            'X-Currency' => 'FCFA',
            'Authorization' => $_ENV['AIRTEL_ACCESS_TOKEN'],
            'x-signature' => $_ENV['AIRTEL_SIGNATURE'],
            'x-key' => $_ENV['AIRTEL_KEY']
        ];    
    }

    #[Route('/payment_success', name: 'payment.success')]
    public function success(): Response
    {
        return new Response('Payment was successful!');
    }

    #[Route('/payment_failure', name: 'payment.failure')]
    public function failure(): Response
    {
        return new Response('Payment failed. Please try again.');
    }

    #[Route('/paiement', name: 'index.payment')]
    public function index(SessionInterface $session): Response
    {
        // Rendre le template Twig avec le montant total
        if ($session->get('total')) {
            $total = $session->get('total');

            return $this->render('payment/index.html.twig', [
                'total' => $total,
            ]);
        }

        return $this->redirectToRoute('page.introuvable');
    }

    #[Route('/page_introuvable', name: 'page.introuvable')]
    public function pageIntrouvable(): Response
    {
        return new Response('La page que vous recherchez n\'est pas disponible.');
    }

    #[Route('/payment_process', name: 'process.payment', methods: ["POST"])]public function makePayment(Request $request, SessionInterface $session): Response
    {
        // Validate and sanitize inputs
        $name = filter_var($request->request->get('name'), FILTER_SANITIZE_STRING);
        $email = filter_var($request->request->get('email'), FILTER_VALIDATE_EMAIL);
        $address = filter_var($request->request->get('address'), FILTER_SANITIZE_STRING);
        $phoneNumber = filter_var($request->request->get('PhoneNumber'), FILTER_SANITIZE_STRING);
        $total = filter_var($request->request->get('total'), FILTER_VALIDATE_FLOAT);
    
    
        if ($total === false || $total <= 0) {
            return $this->redirectToRoute('page.introuvable');
        }
    
        // Process transaction
        $transactionResult = $this->processTransaction($phoneNumber, $total);
    
        if (isset($transactionResult['error'])) {
            return new JsonResponse(['error' => $transactionResult['error']], 400);
        }
    
        $transactionStatus = $transactionResult['status'];
        $transactionId = $transactionResult['transactionId'];
    
        if ($transactionStatus === '202') {
            // Redirect to a success page or display a success message
            $utilisateur = $session->get('utilisateur');
            $idUtilisateur = $utilisateur['idUtilisateur'];
            $cart = $session->get('cart', []);
    
            //foreach loop to iterate over the cart items
            foreach ($cart as $idProduit) {
                // Find the card for the product and user
                $card = $this->entityManager->getRepository(Card::class)->findOneBy([
                    'idProduit' => $idProduit,
                    'idUtilisateur' => $idUtilisateur
                ]);
    
                // If a card is found, update the status
                if ($card) {
                    $card->setStatut(true); // true to indicate the purchase is validated
                    $this->entityManager->flush();
                } else {
                    // log message
                    error_log("Card not found for product ID: $idProduit and user ID: $idUtilisateur");
                }
            }
    
            // Clear the cart
            $session->remove('cart');
            $session->remove('total');
    
            return $this->redirectToRoute('payment.success');
        }
    
        return $this->redirectToRoute('payment.failure');
    }
    
    public function process(array $requestBody)
    {
        try {
            $response = $this->client->request('POST', 'https://openapiuat.airtel.africa/merchant/v2/payments/', [
                'headers' => $this->headers,
                'json' => $requestBody
            ]);
    
            return json_decode($response->getBody()->getContents(), true);
        } catch (BadResponseException $e) {
            return ['error' => $e->getMessage()];
        }
    }

    //Fonction API
    private function processTransaction($phoneNumber, $total) {
        // Validation des entrées
        if (empty($phoneNumber) || !is_numeric($total) || $total <= 0) {
            return [
                'error' => 'Invalid input parameters',
                'status' => 400
            ];
        }
    
        $requestBody = [
            "reference" => "Testing transaction",
            "subscriber" => [
                "country" => "CGB",
                "currency" => "FCFA",
                "msisdn" => $phoneNumber
            ],
            "transaction" => [
                "amount" => $total,
                "country" => "CGB",
                "currency" => "FCFA",
                "id" => uniqid()
            ]
        ];
    
        $response = $this->process($requestBody);
    
        // Vérifier si la réponse contient une erreur
        if (isset($response['error'])) {
            return [
                'error' => $response['error'],
                'status' => 400
            ];
        }
    
        // Traiter la réponse et extraire les informations nécessaires
        $transactionStatus = $response['data']['transaction']['status'] ?? 'UNKNOWN';
        $transactionId = $response['data']['transaction']['id'] ?? 'UNKNOWN';
    
        return [
            'phoneNumber' => $phoneNumber,
            'amount' => $total,
            'status' => $transactionStatus,
            'transactionId' => $transactionId
        ];
    }
    
    public function functionApI($phoneNumber, $total): array {
        return $this->processTransaction($phoneNumber, $total);
    }
    
}
