<?php

namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;

class CommandeService
{
    private $entityManager;
    
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    
    public function getHistoCommandes($userId)
    {
        $commandes = $this->entityManager->getRepository(\App\Entity\Commande::class)->findBy(['utilisateur' => $userId]);
        
        $commandesArray = [];
        foreach ($commandes as $commande) {
            $commandesArray[] = [
                'id' => $commande->getId(),
                'date_commande' => $commande->getDateCommande(),
                'utilisateur_id' => $commande->getUtilisateur(),
                'prix_total' => $commande->getPrixTotal(),
                'etat_commande' => $commande->getEtatCommande(),
            ];
        }
        
        return $commandesArray;
    }
}