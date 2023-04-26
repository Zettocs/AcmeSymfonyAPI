<?php

namespace App\Service;

use App\Entity\HistoriqueCommande;
use Doctrine\ORM\EntityManagerInterface;

class HistoriqueCommandeService
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function logCommand(string $command, ?string $arguments = null): void
    {
        $history = new HistoriqueCommande();
        $history->setCommand($command);
        $history->setArguments($arguments);
        $history->setCreatedAt(new \DateTime());

        $this->em->persist($history);
        $this->em->flush();
    }
}
