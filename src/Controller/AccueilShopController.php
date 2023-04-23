<?php

namespace App\Controller;

use App\Entity\Produit;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AccueilShopController extends AbstractController
{
    #[Route('/shop', name: 'accueil_shop')]
    public function index(Request $request, EntityManagerInterface $em, PaginatorInterface $paginator): Response
    {
        // Récupération des produits à partir de la base de données
        $produits = $em->getRepository(Produit::class)->findAll();

        // Pagination
        $pagination = $paginator->paginate(
            $produits, // Requête contenant les données à paginer
            $request->query->getInt('page', 1), // Numéro de la page en cours, 1 par défaut
            20 // Nombre de résultats par page
        );

        return $this->render('accueil_shop/index.html.twig', [
            'pagination' => $pagination,
            'produits' => $produits,
            'page' => $pagination->getCurrentPageNumber() // Define the 'page' variable
        ]);
    }

    /**
     * @Route("/produit/{id}", name="produit_detail")
     */
    public function produitDetail(Produit $produit, Request $request): Response
    {
        $produitsPanier = array();
        if ($request->isMethod('POST') && $request->request->has('ajouter_au_panier')) {
            $produitPanier = array(
                'idproduit' => $request->request->get('idproduit'),
                'nom' => $request->request->get('nom'),
                'prix' => $request->request->get('prix')
            );
            // Ajouter le produit au panier
            $request->getSession()->get('panier', array());
            $panier = $request->getSession()->get('panier');
            $panier[] = $produitPanier;
            $request->getSession()->set('panier', $panier);
            $message = "Le produit a été ajouté au panier";
        }
        // Trouver le produit par son ID en utilisant une instance de Doctrine EntityManager

        return $this->render('accueil_shop/produit_detail.html.twig', [
            'produit' => $produit,
            'message' => $message ?? null,
        ]);
    }

}
