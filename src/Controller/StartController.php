<?php

namespace App\Controller;

use App\Entity\Produit;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class StartController extends AbstractController {
    #[Route('/start', name: 'start')]
    public function index(): Response
    {
        return $this->render('accueil/start.html.twig', [
            'controller_name' => 'StartController',
        ]);
    }
}