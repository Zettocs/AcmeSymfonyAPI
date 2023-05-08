<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Utilisateur extends \App\Entity\Utilisateur implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'iduser', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'email', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'username', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'firstname', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'password', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'passwordVerification', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'adresse', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'ville', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'pays', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'roles'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'iduser', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'email', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'username', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'firstname', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'password', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'passwordVerification', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'adresse', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'ville', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'pays', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'roles'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Utilisateur $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getIdUser(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdUser', []);

        return parent::getIdUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdUser(int $IdUser): \App\Entity\Utilisateur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdUser', [$IdUser]);

        return parent::setIdUser($IdUser);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresse(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresse', []);

        return parent::getAdresse();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresse(string $Adresse): \App\Entity\Utilisateur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresse', [$Adresse]);

        return parent::setAdresse($Adresse);
    }

    /**
     * {@inheritDoc}
     */
    public function getVille(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVille', []);

        return parent::getVille();
    }

    /**
     * {@inheritDoc}
     */
    public function setVille(string $Ville): \App\Entity\Utilisateur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVille', [$Ville]);

        return parent::setVille($Ville);
    }

    /**
     * {@inheritDoc}
     */
    public function getPays(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPays', []);

        return parent::getPays();
    }

    /**
     * {@inheritDoc}
     */
    public function setPays(string $Pays): \App\Entity\Utilisateur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPays', [$Pays]);

        return parent::setPays($Pays);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail(string $Email): \App\Entity\Utilisateur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$Email]);

        return parent::setEmail($Email);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsername(string $username): \App\Entity\Utilisateur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsername', [$username]);

        return parent::setUsername($username);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword(string $Password): \App\Entity\Utilisateur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$Password]);

        return parent::setPassword($Password);
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', []);

        return parent::eraseCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', []);

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function setRoles(array $roles): \App\Entity\Utilisateur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoles', [$roles]);

        return parent::setRoles($roles);
    }

    /**
     * {@inheritDoc}
     */
    public function serializeRoles(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'serializeRoles', []);

        return parent::serializeRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function deserializeRoles(string $serializedRoles): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'deserializeRoles', [$serializedRoles]);

        return parent::deserializeRoles($serializedRoles);
    }

    /**
     * {@inheritDoc}
     */
    public function prePersistOrUpdate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'prePersistOrUpdate', []);

        return parent::prePersistOrUpdate();
    }

    /**
     * {@inheritDoc}
     */
    public function postLoad()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'postLoad', []);

        return parent::postLoad();
    }

    /**
     * {@inheritDoc}
     */
    public function getUserIdentifier(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserIdentifier', []);

        return parent::getUserIdentifier();
    }

    /**
     * {@inheritDoc}
     */
    public function getFirstname(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstname', []);

        return parent::getFirstname();
    }

    /**
     * {@inheritDoc}
     */
    public function setFirstname(?string $firstname): \App\Entity\Utilisateur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstname', [$firstname]);

        return parent::setFirstname($firstname);
    }

    /**
     * {@inheritDoc}
     */
    public function getPasswordVerification(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPasswordVerification', []);

        return parent::getPasswordVerification();
    }

    /**
     * {@inheritDoc}
     */
    public function setPasswordVerification(string $passwordVerification): \App\Entity\Utilisateur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPasswordVerification', [$passwordVerification]);

        return parent::setPasswordVerification($passwordVerification);
    }

    /**
     * {@inheritDoc}
     */
    public function getInfoProfil(\App\Entity\Utilisateur $utilisateur): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInfoProfil', [$utilisateur]);

        parent::getInfoProfil($utilisateur);
    }

}
