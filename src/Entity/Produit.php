<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit")
 * @ORM\Entity
 */
class Produit
{
    /**
     * @var int
     *
     * @ORM\Column(name="IdProduit_", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idproduit = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom", type="string", length=150, nullable=true)
     */
    private $nom;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Prix", type="decimal", precision=5, scale=2, nullable=true)
     */
    private $prix;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Référence", type="string", length=50, nullable=true)
     */
    private $référence;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Photo", type="string", length=150, nullable=true)
     */
    private $photo;

    /**
     * @var int
     *
     * @ORM\Column(name="Stock", type="integer", length=5, nullable=false)
     */
    private $stock;


    public function getIdProduit(): ?int
    {
        return $this->idproduit;
    }

    public function setIdProduit(): self
    {
        $this->idproduit = $idProduit;
    
        return $this;
    }

    public function getStock(): ?int
    {
        return $this->stock;

    }

    public function setStock(?int $stock): self
    {
        $this->stock = $stock;

        return $this;
    }


    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(?int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getRéférence(): ?string
    {
        return $this->référence;
    }

    public function setRéférence(?string $référence): self
    {
        $this->référence = $référence;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }
}
