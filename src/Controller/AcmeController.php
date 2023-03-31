<?php

namespace App\Controller;


use App\Entity\Inscription;
use App\Entity\Produit;
use App\Entity\Product;
use App\Form\InscriptionType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry as PersistenceManagerRegistry;
use Doctrine\DBAL\Driver\Connection;
use Doctrine\ORM\EntityManagerInterface;
use PDO;

class AcmeController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
    public function homepage(): Response
    {
        return $this->render('acme/homepage.html.twig');
    }


    /**
     * @Route("/panier", name="panier")
     */

    public function panier(): Response
    {

        $dsn = 'mysql:host=localhost;dbname=acme;charset=utf8';
        $username = 'root';
        $password = '';

        $pdo = new PDO($dsn, $username, $password);




        $query = $pdo->prepare('SELECT nom, prix, quantite FROM panier');
        $query->execute();

        $panier = $query->fetchAll(PDO::FETCH_ASSOC);




        return $this->render('acme/panier.html.twig', [
            'panier' => $panier,
        ]);
    }

    /**
     * @Route("/confirmationPanier", name="confirmationPanier")
     */

    public function confirmationPanier(): Response
    {
        return $this->render('acme/confirmation.html.twig');
    }
}
