<?php

namespace App\Controller;

use App\Entity\Vehicle;
use App\Repository\VehicleRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DetailsController extends AbstractController
{
    // #[Route('/details', name: 'app_details', methods:['GET'])]
    // public function index(VehicleRepository $vehicleRepo): Response
    // {
    //     return $this->render('details/index.html.twig', [
    //         'controller_name' => 'DetailsController',
    //         'vehicles' => $vehicleRepo->findAll(),
    //     ]);
    // }

    #[Route('/details/{id}', name: 'app_details_show', requirements: ['id'=> '\d+'], methods:['GET'])]
    public function show(Vehicle $vehicle): Response
    {

    return $this->render('details/index.html.twig', [
        'vehicle' => $vehicle
        ]);
    }
    
    #[Route('/details/create', name: 'app_details_create', methods:['GET', 'POST'])]
    public function create(Request $request): Response
    {
        $vehicle = new Vehicle();
        $form = $this->createForm(VehicleType::class, $vehicle);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($vehicle);
            $entityManager->flush();

            return $this->redirectToRoute('app_details_show', ['id' => $vehicle->getId()]);
        }

        return $this->render('details/create.html.twig', [
            'form' => $form->createView(),
        ]);
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
