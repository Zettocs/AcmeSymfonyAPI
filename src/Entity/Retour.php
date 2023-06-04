<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="retour")
 */
class Retour
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $ligne_id;

    /**
     * @ORM\Column(type="string")
     */
    private $description;

    /**
     * @ORM\Column(type="string")
     */
    private $etat;

    /**
     * @ORM\Column(type="string")
     */
    private $type;

    // Getters and Setters
    // ...

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLigneId(): ?int
    {
        return $this->ligne_id;
    }

    public function setLigneId(int $ligne_id): void
    {
        $this->ligne_id = $ligne_id;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): void
    {
        $this->etat = $etat;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }
}
