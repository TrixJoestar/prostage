<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProStagesController extends AbstractController
{
    /**
     * @Route("/", name="prostages")
     */
    public function index(): Response
    {
        return $this->render('prostages/index.html.twig', [
            'controller_name' => 'ProStagesController',
        ]);
    }

    /**
     * @Route("/entreprises", name="prostages_entreprises")
     */
    public function entreprises(): Response
    {
        return $this->render('prostages/entreprises.html.twig', [
            'controller_name' => 'ProStagesController',
        ]);
    }

    /**
     * @Route("/formations", name="prostages_formations")
     */
    public function formations(): Response
    {
        return $this->render('prostages/formations.html.twig', [
            'controller_name' => 'ProStagesController',
        ]);
    }

    /**
     * @Route("/stages", name="prostages_stages")
     */
    public function stages(): Response
    {
        return $this->render('prostages/stages.html.twig', [
            'controller_name' => 'ProStagesController',
        ]);
    }
}
