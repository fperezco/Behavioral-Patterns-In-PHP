<?php

namespace App\Behavioral_Patterns\Visitor\Interfaces;

interface VisitableInterface
{
    public function accept(VisitorInterface $visitor): string;
}