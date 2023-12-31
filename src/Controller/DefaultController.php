<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/default', name: 'app_default')]
    public function index(): JsonResponse
    {
        return $this->json( [
            'controller_name' => 'DefaultController',
            'message' => 'Welcome, controller OK!',
            'path' =>'src/controller/DefaultController.php'
        ]);
    }
}
