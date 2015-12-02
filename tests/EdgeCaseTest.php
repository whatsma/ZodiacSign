<?php
use Whatsma\ZodiacSign\Calculator;
 
class EdgeCaseTest extends PHPUnit_Framework_TestCase {
 
    public function testAries()
        {
        // 21 March – 20 April
        $calculator = new Calculator;

        $this->assertTrue($calculator->calculate(20,3) != "aries");
        $this->assertTrue($calculator->calculate(21,3) == "aries");
        $this->assertTrue($calculator->calculate(20,4) == "aries");
        $this->assertTrue($calculator->calculate(21,4) != "aries");
        }
 
    public function testTaurus()
        {
        // 21 April – 21 May
        $calculator = new Calculator;

        $this->assertTrue($calculator->calculate(20,4) != "taurus");
        $this->assertTrue($calculator->calculate(21,4) == "taurus");
        $this->assertTrue($calculator->calculate(21,5) == "taurus");
        $this->assertTrue($calculator->calculate(22,5) != "taurus");
        }
 
    public function testGemini()
        {
        // 22 May – 21 June
        $calculator = new Calculator;

        $this->assertTrue($calculator->calculate(21,5) != "gemini");
        $this->assertTrue($calculator->calculate(22,5) == "gemini");
        $this->assertTrue($calculator->calculate(21,6) == "gemini");
        $this->assertTrue($calculator->calculate(22,6) != "gemini");
        }
 
/*
    public function testCancer()
        {
        // 22 June – 22 July
        $calculator = new Calculator;

        $this->assertTrue($calculator->calculate(21,6) != "cancer");
        $this->assertTrue($calculator->calculate(22,6) == "cancer");
        $this->assertTrue($calculator->calculate(22,7) == "cancer");
        $this->assertTrue($calculator->calculate(23,7) != "cancer");
        }
*/

}
