<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Stage;
use App\Entity\Entreprise;
use App\Entity\Formation;

class ProStagesController extends AbstractController
{
    /**
     * @Route("/", name="prostages")
     */
    public function index()
    {
        $repositoryStage = $this->getDoctrine()->getRepository(Stage::class);
        $listeStages = $repositoryStage->findAll();
        return $this->render('prostages/index.html.twig', ['listeStages' => $listeStages]);
    }

    /**
     * @Route("/entreprises", name="prostages_entreprises")
     */
    public function entreprises()
    {
        $repositoryEntreprise = $this->getDoctrine()->getRepository(Entreprise::class);
        $listeEntreprises = $repositoryEntreprise->findAll();
        return $this->render('prostages/entreprises.html.twig', ['listeEntreprises'=> $listeEntreprises]);
    }

    /**
     * @Route("/formations", name="prostages_formations")
     */
    public function formations()
    {
        $repositoryFormation = $this->getDoctrine()->getRepository(Formation::class);
        $listeFormations = $repositoryFormation->findAll();
        return $this->render('prostages/formations.html.twig', ['listeFormations'=> $listeFormations]);
    }

    /**
     * @Route("/stages/{id}", name="prostages_stages")
     */
    public function stages($id)
    {
        $repositoryStage = $this->getDoctrine()->getRepository(Stage::class);
        $stage = $repositoryStage->find($id);
        return $this->render('prostages/stages.html.twig', ['stage'=> $stage]);
    }

    /**
     * @Route("/entreprise/{id}", name="prostages_entreprise")
     */
    public function entreprise($id)
    {
        $repositoryEntreprise = $this->getDoctrine()->getRepository(Entreprise::class);
        $uneEntreprise = $repositoryEntreprise->find($id);
        return $this->render('prostages/entreprise.html.twig', ['uneEntreprise'=> $uneEntreprise]);
    }

    /**
     * @Route("/formation/{id}", name="prostages_formation")
     */
    public function formation($id)
    {
        $repositoryFormation = $this->getDoctrine()->getRepository(Formation::class);
        $uneFormation = $repositoryFormation->find($id);
        return $this->render('prostages/formation.html.twig', ['uneFormation'=> $uneFormation]);
    }
}
