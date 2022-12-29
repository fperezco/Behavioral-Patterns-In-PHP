<?php

namespace App\Tests\Behavioral_Patterns\Visitor;

use App\Behavioral_Patterns\Visitor\Classes\ConcreteVisitors\ShowDetailsVisitor;
use App\Behavioral_Patterns\Visitor\Classes\Elements\VArticle;
use App\Behavioral_Patterns\Visitor\Classes\Elements\VVideo;
use PHPUnit\Framework\TestCase;

class VisitorTest extends TestCase
{
    public function test_that_show_details_visitor_show_right_details_on_article_and_video(){
        //GIVEN
        $vArticle = new VArticle("article title","article content","article author");
        $vVideo = new VVideo("video title","http://video.com");
        $showDetailsVisitor = new ShowDetailsVisitor();

        //WHEN
        $articleDescription = $vArticle->accept($showDetailsVisitor);
        $videoDescription = $vVideo->accept($showDetailsVisitor);

        //THEN
        $this->assertEquals("article title:article content:article author",$articleDescription);
        $this->assertEquals('http://video.com:video title',$videoDescription);
    }
}