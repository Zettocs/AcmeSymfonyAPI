<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Entity\LigneCommande;
use App\Entity\HistoriqueCommande;
use Doctrine\ORM\EntityManagerInterface;
use App\Service\HistoriqueCommandeService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;


class PanierController extends AbstractController
{

    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }


    /**
     * @Route("/panier", name="panier")
     */
    public function index(Request $request, SessionInterface $session): Response
    {
        if ($request->isMethod('POST') && $request->request->has('ajouter_au_panier')) {
            $produit = [
                'idproduit' => $request->request->get('idproduit'),
                'nom' => $request->request->get('nom'),
                'prix' => $request->request->get('prix'),
            ];
    
            // Ajouter le produit au panier
            $panier = $session->get('panier', []);
            array_push($panier, $produit);
            $session->set('panier', $panier);
        }
    
        $produits = $session->get('panier', []);
        $total = array_reduce($produits, function ($sum, $produit) {
            return $sum + $produit['prix'];
        }, 0);
        $session->set('total', $total);
    
        return $this->render('acme/panier.html.twig', [
            'produits' => $produits,
            'total' => $total,
        ]);
    }

    /**
     * @Route("/valider-commande", name="valider_commande")
     */
    public function validerCommande(SessionInterface $session, EntityManagerInterface $entityManager): Response
    {
        // Récupérer les produits du panier
        $panier = $session->get('panier', []);
        $total = $session->get('total');
    
        // Récupérer l'utilisateur connecté
        $user = $this->getUser();
    
        // Créer une nouvelle instance de l'entité Commande
        $commande = new Commande();
        $commande->setUtilisateur($user);
        $commande->setPrixTotal($total);
        $commande->setDateCommande(new \DateTime());
    
        // Ajouter les articles dans la commande
        foreach ($panier as $article) {
            $produit = $this->entityManager->getRepository(\App\Entity\Produit::class)->findOneBy(['nom' => $article['nom']]);
            $ligneCommande = new LigneCommande(); // Utiliser LigneCommande
            $ligneCommande->setCommande($commande);
            $ligneCommande->setProduit($produit); // Utiliser l'article directement
            $ligneCommande->setPrix($article['prix']);
            $commande->addLigneCommande($ligneCommande); // Utiliser la méthode addLignesCommande de la classe Commande
        }
    
        // Enregistrer la commande dans la base de données
        //$entityManager = $this->entityManager;
        $this->entityManager->persist($commande);
        $this->entityManager->flush();
    
        // Vider le panier
        $session->set('panier', []);
        $session->set('total', 0);
    
        // Afficher un message de confirmation
        return $this->render('acme/confirmation.html.twig');
    }
    

    /**
     * @Route("/panier/supprimer/{index}", name="panier_supprimer")
     */
    public function supprimer(Request $request, int $index)
    {
        $this->supprimerProduitDuPanier($index);
        return $this->redirectToRoute('panier');
    }

    /**
     * Supprime un produit du panier en utilisant son index dans le tableau $_SESSION['panier']
     *
     * @param int $index L'index du produit à supprimer dans le tableau $_SESSION['panier']
     */
    private function supprimerProduitDuPanier(int $index)
    {
        if (isset($_SESSION['produit'][$index])) {
            unset($_SESSION['produit'][$index]);
            $_SESSION['produit'] = array_values($_SESSION['produit']); // réindexe le tableau
        }
    }
}
