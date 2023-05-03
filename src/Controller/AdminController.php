<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Form\InscriptionType;
use App\Entity\Produit;

use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Core\Exception\AuthenticationCredentialsNotFoundException;
use Symfony\Component\Security\Core\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\JsonResponse;




class AdminController extends AbstractController
{

    private $doctrine;
    private $entityManager;

    public function __construct(ManagerRegistry $doctrine, EntityManagerInterface $entityManager)
	{
   	 $this->doctrine = $doctrine;
   	 $this->entityManager = $entityManager;
	}

    /**
     * @Route("/page-admin", name="page_admin")
     * @IsGranted("ROLE_ADMIN")
     */
    public function pageAdmin(Request $request, PaginatorInterface $paginator, EntityManagerInterface $em)
    {
        // Récupération des produits à partir de la base de données
        $produits = $em->getRepository(Produit::class)->findAll();

        // Pagination
        $pagination = $paginator->paginate(
            $produits, // Requête contenant les données à paginer
            $request->query->getInt('page', 1), // Numéro de la page en cours, 1 par défaut
            20 // Nombre de résultats par page
        );

        return $this->render('admin/admin.html.twig', [
            'pagination' => $pagination,
            'produits' => $produits,
            'page' => $pagination->getCurrentPageNumber() // Define the 'page' variable
        ]);
    }

    /**
     * @Route("/produit-admin/{id}", name="produit_admin_detail")
     * @IsGranted("ROLE_ADMIN")
     */
    public function produitAdminDetail(Produit $produit, Request $request)
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

        return $this->render('admin/admin_produit_detail.html.twig', [
            'produit' => $produit,
            'message' => $message ?? null,
        ]);
    }

    /**
     * @Route("/modifier-stock-admin", name="modifier_stock_admin")
     * @IsGranted("ROLE_ADMIN")
     */
    public function modifierStockAdmin(Request $request, EntityManagerInterface $entityManager, ManagerRegistry $doctrine)
    {
        $idProduit = null;
        $quantite = null;
    
        // Récupérer l'identifiant du produit et la quantité à modifier
        if (isset($_POST['idProduit'])) {
            $idProduit = $_POST['idProduit'];
        }
        if (isset($_POST['quantite'])) {
            $quantite = $_POST['quantite'];
        }
    
        // Mettre à jour la quantité de stock du produit
        $entityManager = $doctrine->getManager();
        $produit = $entityManager->getRepository(Produit::class)->find($idProduit);
        $produit->setStock($produit->getStock() + $quantite);
        $entityManager->persist($produit);
        $entityManager->flush();
    
        return $this->render('admin/admin_confirmation.html.twig');
    }
}