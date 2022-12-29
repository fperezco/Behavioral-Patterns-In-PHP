<?php

namespace App\Behavioral_Patterns\State\Classes;

class PublishedState extends State
{
    public function publish(): string
    {
        return "already published";
    }
}