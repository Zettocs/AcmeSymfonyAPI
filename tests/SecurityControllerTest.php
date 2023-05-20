<?php

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SecurityControllerTest extends WebTestCase
{
    public function testInscription()
    {
        $client = static::createClient();

        // Envoi d'une requête POST avec des données valides
        $client->request('POST', '/inscription', [
            'inscription' => [
                'username' => 'test_unit',
                'email' => 'test@unit.com',
                'password' => 'password123',
                'passwordVerification' => 'password123',
            ],
        ]);

        // Vérification de la redirection après une inscription réussie
        $this->assertResponseRedirects('security_connexion');

        // Vérification que l'utilisateur est bien enregistré en base de données
        $userRepository = static::$container->get('doctrine')->getRepository(Utilisateur::class);
        $user = $userRepository->findOneBy(['email' => 'test@unit.com']);
        $this->assertInstanceOf(Utilisateur::class, $user);
        $this->assertEquals('test_unit', $user->getUsername());
    }

    public function testInscriptionMotDePasseDifferent()
    {
        $client = static::createClient();

        // Envoi d'une requête POST avec des mots de passe différents
        $client->request('POST', '/inscription', [
            'inscription' => [
                'username' => 'test_unit',
                'email' => 'test@unit.com',
                'password' => 'password123',
                'passwordVerification' => 'differentPassword',
            ],
        ]);

        // Vérification que l'utilisateur est redirigé avec un message d'erreur
        $this->assertResponseRedirects('/security/inscription');
        $client->followRedirect();
        $this->assertSelectorTextContains('.alert-danger', 'Les mots de passe ne correspondent pas');
    }

    public function testApiLoginAvecIdentifiantsValides()
    {
        $client = static::createClient();

        // Envoi d'une requête POST à l'API de connexion avec des identifiants valides
        $client->request('POST', '/api/connexion', [], [], ['CONTENT_TYPE' => 'application/json'], json_encode([
            'email' => 'test@unit.com',
            'password' => 'password123',
        ]));

        // Vérification de la réponse JSON contenant les informations de l'utilisateur et le jeton JWT
        $this->assertResponseIsSuccessful();
        $responseData = json_decode($client->getResponse()->getContent(), true);
        $this->assertArrayHasKey('user', $responseData);
        $this->assertArrayHasKey('token', $responseData);
        // Ajoutez d'autres assertions selon vos besoins
    }
}
