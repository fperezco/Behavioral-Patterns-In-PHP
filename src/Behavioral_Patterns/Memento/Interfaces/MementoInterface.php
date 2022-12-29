<?php

namespace App\Behavioral_Patterns\Memento\Interfaces;

interface MementoInterface
{
    public function getSnapshot(): string;
    public function restoreFromSnapshot(string $snapshot): void;
}