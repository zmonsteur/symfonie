<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class ProStageController extends AbstractController
{
    /**
     * @Route("/", name="pro_stage")
     */
    public function index()
    {
        /*return $this->render('pro_stage/index.html.twig', [
            'controller_name' => 'ProStageController',
        ]);*/
        return new Response('<html><body><h1> Bienvenue sur Prostage </h1></body></html>');
    }
    /**
     * @Route("/entreprise",name= "proStageEntreprise")
     */
    public function afficherEntreprise()
    {
        return new Response('<html><body><h1> Liste des entreprises </h1></body></html>');
    }
    /**
     * @Route("/formation",name="proStageFormation")
     */
    public function afficherFormation()
    {
        return new Response('<html><body><h1> Liste des formations</h1></body></html>');
    }
    /**
     * @route("/stage/{id}",name="proStage_Stage")
     */
    public function afficherStage($id)
    {
        return new Response("<html><body><h1>Bienvenue sur le stage $id  </h1></body><html>");
    }
}
