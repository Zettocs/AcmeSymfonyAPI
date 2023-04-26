<?php

namespace App\EventSubscriber;

use App\Service\HistoriqueCommandeService;
use Symfony\Component\Console\ConsoleEvents;
use Symfony\Component\Console\Event\ConsoleCommandEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class HistoriqueCommandeSubscriber implements EventSubscriberInterface
{
    private $historiqueCommandeService;

    public function __construct(HistoriqueCommandeService $historiqueCommandeService)
    {
        $this->historiqueCommandeService = $historiqueCommandeService;
    }

    public static function getSubscribedEvents()
    {
        return [
            ConsoleEvents::COMMAND => 'onConsoleCommand',
        ];
    }

    public function onConsoleCommand(ConsoleCommandEvent $event)
    {
        $input = $event->getInput();
        $command = $event->getCommand();

        $arguments = [];
        foreach ($input->getArguments() as $name => $value) {
            $arguments[] = $name . '=' . $value;
        }
        foreach ($input->getOptions() as $name => $value) {
            $arguments[] = '--' . $name . ($value ? '=' . $value : '');
        }

        $arguments = implode(' ', $arguments);

        $this->historiqueCommandeService->logCommand($command->getName(), $arguments);
    }
}
