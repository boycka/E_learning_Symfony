<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ResponseController extends AbstractController
{
    #[Route('/response', name: 'app_response')]
    public function index(): Response
    {
        return $this->render('response/index.html.twig', [
            'controller_name' => 'ResponseController',
        ]);
    }

    #[Route('/api', name: 'api_response')]
    public function api(): Response
    {
        $response = new Response('{"username": "Oussama", "phone": "0606060606"}');

        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
}
