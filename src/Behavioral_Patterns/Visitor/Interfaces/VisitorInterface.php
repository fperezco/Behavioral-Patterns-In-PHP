<?php

namespace App\Behavioral_Patterns\Visitor\Interfaces;


use App\Behavioral_Patterns\Visitor\Classes\Elements\VArticle;
use App\Behavioral_Patterns\Visitor\Classes\Elements\VBlog;
use App\Behavioral_Patterns\Visitor\Classes\Elements\VVideo;

/**
 * The Visitor interface declares a set of visiting methods for each of the
 * Concrete Component classes.
 */
interface VisitorInterface
{
    public function visitVArticle(VArticle $varticle): string;

    public function visitVVideo(VVideo $vvideo): string;

    public function visitVBlog(VBlog $vblog): string;
}