<?php

namespace App\Behavioral_Patterns\State\Classes;

abstract class State
{
    /**
     * @var Document
     */
    protected $document;

    public function setDocument(Document $document)
    {
        $this->document = $document;
    }

    /**
     * @return Document
     */
    public function getDocument(): Document
    {
        return $this->document;
    }

    abstract public function publish(): string;

}