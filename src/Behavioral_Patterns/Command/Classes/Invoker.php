<?php

namespace App\Behavioral_Patterns\Command_Pattern\Classes;

use App\Behavioral_Patterns\Command_Pattern\Interfaces\CommandInterface;

/**
 * The Invoker is associated with one or several commands. It sends a request to
 * the command.
 */
class Invoker
{
    /**
     * @var CommandInterface
     */
    private $onStart;

    /**
     * @var CommandInterface
     */
    private $onFinish;

    /**
     * Initialize commands.
     */
    public function setOnStart(CommandInterface $command): void
    {
        $this->onStart = $command;
    }

    public function setOnFinish(CommandInterface $command): void
    {
        $this->onFinish = $command;
    }

    /**
     * The Invoker does not depend on concrete command or receiver classes. The
     * Invoker passes a request to a receiver indirectly, by executing a
     * command.
     */
    public function doSomethingImportant(): void
    {
        echo "Invoker: Does anybody want something done before I begin?\n";
        if ($this->onStart instanceof CommandInterface) {
            $this->onStart->execute();
        }

        echo "Invoker: ...doing something really important...\n";

        echo "Invoker: Does anybody want something done after I finish?\n";
        if ($this->onFinish instanceof CommandInterface) {
            $this->onFinish->execute();
        }
    }
}