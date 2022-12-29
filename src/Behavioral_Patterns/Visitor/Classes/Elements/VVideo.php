<?php

namespace App\Behavioral_Patterns\Visitor\Classes\Elements;

use App\Behavioral_Patterns\Visitor\Interfaces\VisitableInterface;
use App\Behavioral_Patterns\Visitor\Interfaces\VisitorInterface;

class VVideo implements VisitableInterface
{

    private string $title;
    private string $url;

    public function __construct(string $title, string $url)
    {
        $this->title = $title;
        $this->url = $url;
    }

    public function accept(VisitorInterface $visitor): string
    {
       return $visitor->visitVVideo($this);
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

}