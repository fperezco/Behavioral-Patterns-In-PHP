<?php

namespace App\Behavioral_Patterns\Command_Pattern\Classes;

use App\Behavioral_Patterns\Command_Pattern\Interfaces\CommandInterface;

class SimpleCommand implements CommandInterface
{
    private $payload;

    public function __construct(string $payload)
    {
        $this->payload = $payload;
    }

    public function execute(): void
    {
        echo "SimpleCommand: See, I can do simple things like printing (" . $this->payload . ")\n";
    }
}