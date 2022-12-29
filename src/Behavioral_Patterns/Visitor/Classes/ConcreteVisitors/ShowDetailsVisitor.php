<?php

namespace App\Behavioral_Patterns\Visitor\Classes\ConcreteVisitors;

use App\Behavioral_Patterns\Visitor\Classes\Elements\VArticle;
use App\Behavioral_Patterns\Visitor\Classes\Elements\VBlog;
use App\Behavioral_Patterns\Visitor\Classes\Elements\VVideo;
use App\Behavioral_Patterns\Visitor\Interfaces\VisitorInterface;

class ShowDetailsVisitor implements VisitorInterface
{
    public function visitVArticle(VArticle $varticle): string
    {
        return $varticle->getTitle(). ":". $varticle->getContent(). ":" . $varticle->getAuthor();
    }

    public function visitVVideo(VVideo $vvideo): string
    {
       return $vvideo->getUrl().":". $vvideo->getTitle();
    }

    public function visitVBlog(VBlog $vblog): string
    {
       return $vblog->getUrl().":". $vblog->getTitle().":".$vblog->getContent() . ":". $vblog->getDate();
    }
}