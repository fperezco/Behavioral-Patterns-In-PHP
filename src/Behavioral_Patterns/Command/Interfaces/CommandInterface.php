<?php

namespace App\Behavioral_Patterns\Command_Pattern\Interfaces;

interface CommandInterface
{
    public function execute(): void;
}