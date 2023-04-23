<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class PanierController extends AbstractController
{
    
    /**
     * @Route("/panier", name="panier")
     */

     public function index(Request $request)
     {
 
         if ($request->isMethod('POST') && $request->request->has('ajouter_au_panier')) {
             $produit = array(
                 'idproduit' => $request->request->get('idproduit'),
                 'nom' => $request->request->get('nom'),
                 'prix' => $request->request->get('prix')
             );
             // ajouter le produit au panier
             $_SESSION['produit'][] = $produit;
         }
 
         if (isset($_SESSION['produit'])) {
             $produits = $_SESSION['produit'];
             $total = 0;
             foreach ($produits as $produit) {
                 $total += $produit['prix'];
             }
         } else {
             $produits = array();
             $total = 0;
         }
 
         return $this->render('acme/panier.html.twig', [
             'produits' => $produits,
             'total' => $total
         ]);
     }

     /**
 * Supprime un produit du panier en utilisant son index dans le tableau $_SESSION['panier']
 *
 * @param int $index L'index du produit à supprimer dans le tableau $_SESSION['panier']
 */
function supprimerProduitDuPanier(int $index) {
    if (isset($_SESSION['produit'][$index])) {
        unset($_SESSION['produit'][$index]);
        $_SESSION['produit'] = array_values($_SESSION['produit']); // réindexe le tableau
    }
}

/**
 * @Route("/panier/supprimer/{index}", name="panier_supprimer")
 */
public function supprimer(Request $request, int $index)
{
    $this->supprimerProduitDuPanier($index);
    return $this->redirectToRoute('panier');
}

    
}
