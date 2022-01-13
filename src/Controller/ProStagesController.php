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
    public function index()
    {
        return $this->render('prostages/index.html.twig');
    }

    /**
     * @Route("/entreprises/{id}", name="prostages_entreprises")
     */
    public function entreprises($id)
    {
        return $this->render('prostages/entreprises.html.twig',
        ['idRessource' => $id]);
    }

    /**
     * @Route("/formations", name="prostages_formations")
     */
    public function formations()
    {
        return $this->render('prostages/formations.html.twig');
    }

    /**
     * @Route("/stages", name="prostages_stages")
     */
    public function stages()
    {
        return $this->render('prostages/stages.html.twig');
    }
}
