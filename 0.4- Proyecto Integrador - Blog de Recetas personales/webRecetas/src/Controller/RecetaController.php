<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry as PersistenceManagerRegistry;
use App\Entity\Receta;

class RecetaController extends AbstractController
{

    public function index(PersistenceManagerRegistry $doctrine): Response
    {
        $em = $doctrine->getManager();
        
        $repoReceta = $doctrine->getRepository(Receta::class);
        $receta = $repoReceta->findAll();
        foreach($receta as $rec){
            echo $rec->getUserId()->getEmail().": ".$rec->getTitle()."<br/>";
        }
        return $this->render('receta/index.html.twig', [
            'controller_name' => 'RecetaController',
        ]);
    }
}
