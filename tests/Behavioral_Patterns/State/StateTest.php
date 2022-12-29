<?php

namespace App\Tests\Behavioral_Patterns\State;

use App\Behavioral_Patterns\State\Classes\Document;
use App\Behavioral_Patterns\State\Classes\DraftState;
use App\Behavioral_Patterns\State\Classes\PublishedState;
use PHPUnit\Framework\TestCase;

class StateTest extends TestCase
{
    public function test_that_draft_state_publish_method_move_document_to_published_state()
    {
        //GIVEN
        $document = new Document(new DraftState());
        //WHEN
        $document->publish();
        //THEN
        $this->assertEquals(PublishedState::class, get_class($document->getState()));
    }
}