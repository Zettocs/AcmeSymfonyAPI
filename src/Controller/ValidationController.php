<?php

namespace App\Controller;

use Symfony\Component\Security\Core\Annotation\IsGranted;
use App\Entity\Produit;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;





class ValidationController extends AbstractController

{

/**
 * @Route("/panier/valider", name="panier_valider")
 * @IsGranted("ROLE_USER")
 */
public function valider(Request $request, EntityManagerInterface $entityManager)
{
    $user = $this->getUser();
    $produits = $_SESSION['panier'];

    // Enregistrement de la commande
    $commande = new Commande();
    $commande->setUtilisateur($user);
    $commande->setDateCommande(new \DateTime());
    $entityManager->persist($commande);

    // Enregistrement des produits de la commande
    foreach ($produits as $produit) {
        $commandeProduit = new CommandeProduit();
        $commandeProduit->setCommande($commande);
        $commandeProduit->setProduit($produit['idproduit']);
        $commandeProduit->setQuantite(1);
        $commandeProduit->setPrix($produit['prix']);
        $entityManager->persist($commandeProduit);
    }

    // Nettoyage du panier
    unset($_SESSION['panier']);

    $entityManager->flush();

    return $this->redirectToRoute('commandes');
}

}