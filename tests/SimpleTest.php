<?php
use Whatsma\ZodiacSign\Calculator;
 
class SimpleTest extends PHPUnit_Framework_TestCase {
 
    public function testInvalidMonth()
        {
        $calculator = new Calculator;
        $this->assertTrue($calculator->calculate(1,1) == "capricorn");
        }

}
