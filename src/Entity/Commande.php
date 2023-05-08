<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * @ORM\Entity
 */
class Commande
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Utilisateur", inversedBy="commandes")
     * @ORM\JoinColumn(name="utilisateur_id", referencedColumnName="IdUser")
     */
    private $utilisateur;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateCommande;


    /**
    * @ORM\ManyToMany(targetEntity="App\Entity\Produit")
    * @ORM\JoinTable(name="nom_de_la_table_de_jointure",
    *      joinColumns={@ORM\JoinColumn(name="commande_id", referencedColumnName="id")},
    *      inverseJoinColumns={@ORM\JoinColumn(name="produit_id", referencedColumnName="IdProduit_")}
    *      )
    */
    private $produits;

    /**
    * @ORM\Column(type="float")
    */
    private $prixTotal;

    /**
    * @ORM\OneToMany(targetEntity="App\Entity\LigneCommande", mappedBy="commande", cascade={"persist"})
    */
    private $lignesCommande;

    public function __construct()
    {
        $this->lignesCommande = new ArrayCollection();
        $this->dateCommande = new \DateTime();
        $this->prixTotal = 0;
    }

    public function addLigneCommande(LigneCommande $ligneCommande): self
    {
        if (!$this->lignesCommande->contains($ligneCommande)) {
            $this->lignesCommande[] = $ligneCommande;
            $ligneCommande->setCommande($this);
        }

        return $this;
    }

    public function removeLigneCommande(LigneCommande $ligneCommande): self
    {
        if ($this->lignesCommande->removeElement($ligneCommande)) {
            // set the owning side to null (unless already changed)
            if ($ligneCommande->getCommande() === $this) {
                $ligneCommande->setCommande(null);
            }
        }

        return $this;
    }

    // Getters et setters

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUtilisateur(): ?Utilisateur
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(?Utilisateur $utilisateur): self
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    public function getDateCommande(): ?\DateTimeInterface
    {
        return $this->dateCommande;
    }

    public function setDateCommande(\DateTimeInterface $dateCommande): self
    {
        $this->dateCommande = $dateCommande;

        return $this;
    }

    public function setPrixTotal($total): self
    {
        $this->prixTotal = $total;

        return $this;
    }

    public function getPrixTotal(): ?float
    {
        return $this->prixTotal;
    }

    /**
     * @return ArrayCollection|Produit[]
     */
    public function getProduits(): ArrayCollection
    {
        return new ArrayCollection($this->produits->toArray());
    }

    public function addProduit(Produit $produit): self
    {
        if (!$this->produits->contains($produit)) {
            $this->produits[] = $produit;
        }

        return $this;
    }

    public function removeProduit(Produit $produit): self
    {
        if ($this->produits->contains($produit)) {
            $this->produits->removeElement($produit);
        }

        return $this;
    }
}
