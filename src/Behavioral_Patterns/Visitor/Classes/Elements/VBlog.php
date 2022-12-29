<?php

namespace App\Behavioral_Patterns\Visitor\Classes\Elements;

use App\Behavioral_Patterns\Visitor\Interfaces\VisitableInterface;
use App\Behavioral_Patterns\Visitor\Interfaces\VisitorInterface;

class VBlog implements VisitableInterface
{
    private string $url;
    private string $title;
    private string $content;
    private string $date;

    public function __construct(string $url, string $title, string $content, string $date)
    {
        $this->url = $url;
        $this->title = $title;
        $this->content = $content;
        $this->date = $date;
    }

    public function accept(VisitorInterface $visitor): string
    {
       return $visitor->visitVBlog($this);
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
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
    public function getDate(): string
    {
        return $this->date;
    }

}