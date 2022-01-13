<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Formation;
use App\Entity\Entreprise;
use App\Entity\Stage;
use App\DataFixtures\Faker;
use App\DataFixtures\Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // FORMATIONS

        $faker = \Faker\Factory::create();
        $formations = array();
        $entreprises = array();
        $nomFormationCourt = array("D.U.T", "B.U.T", "LP", "B.T.S");
        $nomFormationLong = array("Diplome Universitaire de Technologie", "Bachelor Universitaire de Technologie",
        "Licence Professionnelle", "Brevet Technologique Supérieur");
        
        for($i = 0; $i < 4; $i++)
        {
            $uneFormation = new Formation();
            $uneFormation->setNomCourt($nomFormationCourt[$i]);
            $uneFormation->setNomLong($nomFormationLong[$i]);
            $manager->persist($uneFormation);
        
            $formations[$i] = $uneFormation;
        }
        
        // ENTREPRISES

        $nomEntreprise = array("Google", "Ubisoft", "Microsoft", "Amazon");
        $activiteEntreprise = array("Développement Web", "Développement de jeu", "Dévelopement de jeu", "Développement de Web");
        $siteWebEntreprise = array("google.fr", "ubisoft.fr", "microsoft.fr", "amazon.fr");

        for($i = 0; $i < 4; $i++)
        {
            $uneEntreprise = new Entreprise();
            $uneEntreprise->setNom($nomEntreprise[$i]);
            $uneEntreprise->setAdresse($faker->address);
            $uneEntreprise->setActivite($activiteEntreprise[$i]);
            $uneEntreprise->setSiteWeb($siteWebEntreprise[$i]);
            $manager->persist($uneEntreprise);

            $entreprises[$i] = $uneEntreprise;

        }

        // STAGES

        $titreStage = array("Développeur Web", "Développeur Java", "Développeur C++", "Développeur Python");
        $missionStage = array("Créer un nouveau site web pour Westeros.", "Créer une application mobile en Java dans le theme des mangas.",
        "Faire une copie de Minecraft en C++", "Faire une copie du snake sur mobile");
        $emailStage = array("google@gmail.com", "ubisoftofficiel@gmail.com", "microsoftofficiel@gmail.com", "amazonofficiel@gmail.com");

        for($i = 0; $i < 4; $i++)
        {
            $unStage = new Stage();
            $unStage->setTitre($titreStage[$i]);
            $unStage->setMission($missionStage[$i]);
            $unStage->setEmail($emailStage[$i]);
            $unStage->addFormation($formations[$i]);
            $unStage->setEntreprise($entreprises[$i]);
            $manager->persist($unStage);
            
        }

        $manager->flush();
    }
}
