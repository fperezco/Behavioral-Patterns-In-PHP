<?php

namespace App\Tests\Behavioral_Patterns\Iterator;

use App\Behavioral_Patterns\Iterator\Classes\CsvIterator;
use PHPUnit\Framework\TestCase;

class IteratorTest extends TestCase
{
    public function test_csv_iterator_can_be_used_in_a_foreach_loop(){
        //GIVEN
        $csv = new CsvIterator(__DIR__ . '/example.csv');
        //WHEN
        foreach ($csv as $key => $row) {
            if($key == 3){
                //THEN
                $this->assertEquals(["2;juan;sanchez;25;"],$row);
            }
        }
    }
}