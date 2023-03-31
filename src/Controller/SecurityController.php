<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Form\InscriptionType;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
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

    public function __construct(ManagerRegistry $doctrine)
    {
        $this->doctrine = $doctrine;
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

    public function logout()
    {
    }
    /**
     * @Route("/api/connexion", name="security_api_connexion", methods={"POST"})
     */
    public function apiLogin(Request $request, JWTTokenManagerInterface $jwtManager, UserPasswordHasherInterface $encoder)
    {
        // Récupérez les données de connexion du corps de la requête
        $data = json_decode($request->getContent(), true);
        $email = $data['email'] ?? '';
        $password = $data['password'] ?? '';

        // Trouvez l'utilisateur dans la base de données en fonction de l'email
        $user = $this->doctrine->getRepository(Utilisateur::class)->findOneBy(['email' => $email]);

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
     * @Route("/api/deconnexion", name="security_api_deconnexion", methods={"POST"})
     */
    public function apiLogout()
    {
        throw new \Exception('Cette méthode ne doit jamais être appelée directement');
    }
}