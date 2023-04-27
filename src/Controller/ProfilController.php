<?php

namespace App\Controller; 

use App\Service\CommandeService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;


class ProfilController extends AbstractController
{

    private $doctrine;
    private $entityManager;
    private $commandeService;


    public function __construct(ManagerRegistry $doctrine, EntityManagerInterface $entityManager, CommandeService $commandeService)
	{
   	 $this->doctrine = $doctrine;
   	 $this->entityManager = $entityManager;
     $this->commandeService = $commandeService;
	}


    /**
    * @Route("/profil/", name="profil")
    */
    public function profil(EntityManagerInterface $entityManager)
    {
        // Récupérer l'utilisateur courant
        $user = $this->getUser();

        // Vérifier si l'utilisateur est connecté
        if (!$user) {
            throw $this->createNotFoundException('Vous devez être connecté pour accéder à cette page');
        }

        // Afficher les informations de l'utilisateur
        return $this->render('profil/profil.html.twig', [
            'user' => $user
        ]);
    }

    /**
    * @Route("/profil/historique", name="historique")
    */
    public function getUserHistoCommandes(): Response
    {

    // Récupérer l'utilisateur actuel
    $user = $this->getUser();
    
    // Récupérer toutes les commandes de l'utilisateur
    $commandes = $this->doctrine->getRepository(\App\Entity\Commande::class)->findBy(['utilisateur' => $user->getIdUser()]);
    
    // Appeler la fonction getHistoCommandes() pour récupérer les détails de chaque commande
    $commandesArray = $this->commandeService->getHistoCommandes($user->getIdUser());
    
    // Rendre la vue profil.html.twig avec les informations de l'utilisateur et ses commandes
    return $this->render('profil/historique.html.twig', [
        'user' => $user,
        'commandes' => $commandesArray,
    ]);


    }
        
        
}