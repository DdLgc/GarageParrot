<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DetailsController extends AbstractController
{
    #[Route('/details', name: 'app_details', methods:['GET'])]
    public function index(): Response
    {
        return $this->render('details/index.html.twig', [
            'controller_name' => 'DetailsController',
        ]);
    }
    #[Route('/details{id}', name: 'app_details_show', requirements: ['id'=> '\d+'], methods:['GET'])]
    public function show(): Response
    {
        dd(__METHOD__);
        // return $this->render('details/index.html.twig', [
        //     'controller_name' => 'DetailsController',
        // ]);
    }
    #[Route('/details/create', name: 'app_details_create', methods:['GET', 'POST'])]
    public function create(): Response
    {
        dd(__METHOD__);
        // return $this->render('details/index.html.twig', [
        //     'controller_name' => 'DetailsController',
        // ]);
    }
    #[Route('/details/{id}/edit', name: 'app_details_edit', methods:['GET', 'POST'],requirements: ['id'=> '\d+'])]
    public function edit(): Response
    {
        dd(__METHOD__);
        // return $this->render('details/index.html.twig', [
        //     'controller_name' => 'DetailsController',
        // ]);
    }
    #[Route('/details/{id/}delete', name: 'app_details_delete', methods:['POST'])]
    public function delete(): Response
    {
        dd(__METHOD__);
        // return $this->render('details/index.html.twig', [
        //     'controller_name' => 'DetailsController',
        // ]);
    }
}
