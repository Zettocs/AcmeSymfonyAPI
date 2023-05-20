<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Form\InscriptionType;
use App\Entity\Produit;

use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Bundle\DoctrineBundle\Registry;
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
use Symfony\Component\HttpFoundation\Response;




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

    /**
     * @Route("/produit-admin/{id}/supprimer", name="produit_admin_supprimer")
     * @IsGranted("ROLE_ADMIN")
     */
    public function produitAdminSupprimer(Produit $produit, Request $request, EntityManagerInterface $em)
    {

        
        // Vérifier si le formulaire a été soumis
        if ($request->isMethod('POST') && $request->request->has('produit_admin_supprimer')) {
            // Supprimer le produit de la base de données
            $em->remove($produit);
            $em->flush();
            $this->addFlash('success', 'Le produit a été supprimé avec succès');
            return $this->redirectToRoute('page_admin');
        }

        return $this->render('admin/admin_confirmation_suppression.html.twig', [
            'produit' => $produit,
        ]);
    }

    /**
     * @Route("/ajout_produit", name="ajout_produit")
     * @IsGranted("ROLE_ADMIN")
     */
    public function ajouterProduit(Request $request, EntityManagerInterface $em, ManagerRegistry $doctrine)
    {
        // Création d'une nouvelle instance de l'entité Produit
        $produit = new Produit();

        // Récupération des données du formulaire
        $nom = $request->request->get('nom');
        $reference = $request->request->get('reference');
        $prix = $request->request->get('prix');
        $quantite = $request->request->get('quantite');
        // Récupération du fichier image
        $image = $request->files->get('image');
    
        // Vérification si le formulaire a été soumis
        if ($request->isMethod('POST')) {
            // Affectation des données du formulaire à l'entité Produit
            $produit->setNom($nom);
            $produit->setRéférence($reference);
            $produit->setPrix($prix);
            $produit->setStock($quantite);
            $produit->setPhoto($image);
            
            // Vérification si un fichier image a été téléchargé
            if ($image !== null) {
                $imageName = md5(uniqid()) . '.' . $image->guessExtension();
    
                // Déplacement du fichier image dans le répertoire public/images
                $image->move(
                    $this->getParameter('images_directory'),
                    $imageName
                );
    
                // Affectation du nom de l'image à l'entité Produit
                $produit->setImage($imageName);
            }
    
            // Sauvegarde du produit dans la base de données
            $em = $doctrine->getManager();
            $em->persist($produit);
            $em->flush();
    
            // Redirection vers la page d'administration des produits
            return $this->redirectToRoute('page_admin');
        }
    
        // Affichage du formulaire d'ajout de produit
        return $this->render('admin/admin_ajouter_produit.html.twig');
    }

    /**
    * @Route("/admin_historique", methods={"GET"}, name="admin_historique")
    */
    public function getAllCommandes(): Response
    {
        $commandes = $this->entityManager->getRepository(\App\Entity\Commande::class)->findAll();
    
        $commandesArray = [];
        foreach ($commandes as $commande) {
            $commandesArray[] = [
                'id' => $commande->getId(),
                'date_commande' => $commande->getDateCommande(),
                'utilisateur_id' => $commande->getUtilisateur()->getUsername(),
                'prix_total' => $commande->getPrixTotal(),
                'etat_commande' => $commande->getEtatCommande(),
            ];
        }
    
        return $this->render('admin/admin_historique.html.twig', [
            'commandes' => $commandesArray,
        ]);
    }

/**
* @Route("/admin_historique/{id}/modifier_statut", methods={"POST"}, name="modifier_statut")
*/
public function modifierStatut(Request $request, $id): Response
{
    $entityManager = $this->doctrine->getManager();
    $commande = $entityManager->getRepository(\App\Entity\Commande::class)->find($id);

    if (!$commande) {
        throw $this->createNotFoundException('La commande avec l\'ID '.$id.' n\'existe pas.');
    }

    $commande->setEtatCommande('Expédiée');
    $entityManager->flush();

    return $this->redirectToRoute('admin_historique');
}

}