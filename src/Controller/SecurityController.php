<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Form\InscriptionType;
use App\Entity\Produit;


use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;

use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;


class SecurityController extends AbstractController
{
    private $doctrine;
    private $entityManager;

    public function __construct(ManagerRegistry $doctrine, EntityManagerInterface $entityManager)
	{
   	 $this->doctrine = $doctrine;
   	 $this->entityManager = $entityManager;
	}

    /**
     * @Route("/inscription", name="security_inscription")
     */
    public function inscription(Request $request, EntityManagerInterface $manager, UserPasswordHasherInterface $encoder)
    {
        $utilisateur  = new Utilisateur();

        $form = $this->createForm(InscriptionType::class, $utilisateur);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $password = $form->get('Password')->getData();
            $passwordVerification = $form->get('PasswordVerification')->getData();

            if ($password !== $passwordVerification) {
                $this->addFlash('danger', 'Les mots de passe ne correspondent pas');
                return $this->redirectToRoute('security_inscription');
            }
            $hash = $encoder->hashPassword($utilisateur, $utilisateur->getPassword());

            $utilisateur->setPassword($hash);
            $manager->persist($utilisateur);
            $manager->flush();



            return $this->redirectToRoute('security_connexion');
        }

        return $this->render('security/inscription.html.twig', [
            'form' => $form->createView()
        ]);
    }
    /**
     * @Route("/connexion", name="security_connexion", methods={"GET", "POST"})
     */
    public function login()
    {
        return $this->render('security/login.html.twig');
    }

    /**
     * @Route("/deconnexion", name="security_deconnexion")
     */

    public function logout(SessionInterface $session)
    {
        // Supprime la session de l'utilisateur connecté
        $session->clear();

        return $this->redirectToRoute('home');
    }

    /**
     * @Route("/api/connexion", name="security_api_connexion", methods={"POST"})
     */
    public function apiLogin(Request $request, JWTTokenManagerInterface $jwtManager, UserPasswordHasherInterface $encoder, SessionInterface $session)
    {
       
        // Récupérez les données de connexion du corps de la requête
        $data = json_decode($request->getContent(), true);
        $email = isset($data['email']) ? $data['email'] : '';
        $password = $data['password'] ?? '';

        // Trouvez l'utilisateur dans la base de données en fonction de l'email
        $userRepository = $this->entityManager->getRepository(Utilisateur::class);
        $user = $userRepository->findOneBy(['email' => $email]);

        

        // Si l'utilisateur n'existe pas ou que le mot de passe est incorrect, renvoyez une réponse avec une erreur
        if (!$user || !$encoder->isPasswordValid($user, $password)) {
            return new JsonResponse(['error' => 'Email ou mot de passe incorrect'], Response::HTTP_UNAUTHORIZED);
        }

        // Créez un JWT pour l'utilisateur connecté
        $token = $jwtManager->create($user);
        // Renvoyez les informations de l'utilisateur et le JWT
        return new JsonResponse([
            'user' => [
                'id' => $user->getIdUser(),
                'email' => $user->getEmail(),
                'username' => $user->getUsername(),
                'firstname' => $user->getFirstname(),
                'adresse' => $user->getAdresse(),
                'ville' => $user->getVille(),
                'pays' => $user->getPays(),
            ],
            
            'token' => $token,
        ]);
    }

/**
 * @Route("/api/adminconnexion", name="security_api_connexion", methods={"POST"})
 */
public function apiAdminLogin(Request $request, JWTTokenManagerInterface $jwtManager, UserPasswordEncoderInterface $encoder)
{
    // Récupérez les données de connexion du corps de la requête
    $data = json_decode($request->getContent(), true);
    $email = isset($data['email']) ? $data['email'] : '';
    $password = $data['password'] ?? '';

    // Trouvez l'utilisateur dans la base de données en fonction de l'email
    $userRepository = $this->getDoctrine()->getRepository(Admin::class);
    $user = $userRepository->findOneBy(['email' => $email]);

    // Si l'utilisateur n'existe pas ou que le mot de passe est incorrect, renvoyez une réponse avec une erreur
    if (!$user || !$encoder->isPasswordValid($user, $password)) {
        return new JsonResponse(['error' => 'Email ou mot de passe incorrect'], Response::HTTP_UNAUTHORIZED);
    }

    // Créez un JWT pour l'utilisateur connecté
    $token = $jwtManager->create($user);

    // Renvoyez les informations de l'utilisateur et le JWT
    return new JsonResponse([
        'user' => [
            'id' => $user->getIdAdmin(),
            'email' => $user->getEmail(),
        ],
        'token' => $token,
    ]);
}

    /**
     * @Route("/api/deconnexion", name="security_api_deconnexion", methods={"POST"})
     */
    public function apiLogout()
    {
        throw new \Exception('Cette méthode ne doit jamais être appelée directement');
    }

    /**
     * @Route("/api/produits", name="api_produits", methods={"GET"})
     */

    public function getProduits(): JsonResponse
    {
        $produits = $this->doctrine->getRepository(Produit::class)->findAll();
        
        $produitsArray = [];
        foreach ($produits as $produit) {
            $produitsArray[] = [
                'IdProduit_' => $produit->getIdProduit(),
                'Nom' => $produit->getNom(),
                'Reference' => $produit->getRéférence(),
                'Prix' => $produit->getPrix(),
                'Photo' => $produit->getPhoto(),
                'Stock' => $produit->getStock(),
            ];
        }
        
        return new JsonResponse($produitsArray);
    }

/**
 * @Route("/api/modifier-stock", name="modifier_stock", methods={"POST"})
 */

public function modifierStock(Request $request, EntityManagerInterface $entityManager, ManagerRegistry $doctrine): JsonResponse
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

    return new JsonResponse(['success' => true]);
}


/**
 * @Route("/api/historique_commande", methods={"GET"})
 */


public function getAllCommandes(): JsonResponse
{
    $commandes = $this->entityManager->getRepository(\App\Entity\Commande::class)->findAll();
    
    $commandesArray = [];
    foreach ($commandes as $commande) {
        $commandesArray[] = [
            'id' => $commande->getId(),
            'date_commande' => $commande->getDateCommande(),
            'utilisateur_id' => $commande->getUtilisateur()->getIdUser(),
            'prix_total' => $commande->getPrixTotal(),
        ];
    }
    
    return new JsonResponse($commandesArray);
}


/**
 *@Route("/api/utilisateur/{id}", methods={"GET"})
 */
public function getUtilisateur($id): JsonResponse
{
$utilisateur = $this->entityManager->getRepository(\App\Entity\Utilisateur::class)->find($id);

$utilisateurArray = [
'nom' => $utilisateur->getFirstname(),
'email' => $utilisateur->getEmail(),
];

return new JsonResponse($utilisateurArray);
}  




    
}
