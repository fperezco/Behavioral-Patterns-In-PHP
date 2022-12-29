<?php

namespace App\Behavioral_Patterns\Visitor\Classes\Elements;

use App\Behavioral_Patterns\Visitor\Interfaces\VisitableInterface;
use App\Behavioral_Patterns\Visitor\Interfaces\VisitorInterface;

class VArticle implements VisitableInterface
{
    private string $title;
    private string $content;
    private string $author;

    public function __construct(string $title, string $content, string $author)
    {
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
    }

    public function accept(VisitorInterface $visitor): string
    {
        return $visitor->visitVArticle($this);
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
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

}