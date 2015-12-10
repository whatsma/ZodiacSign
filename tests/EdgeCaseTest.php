<?php
namespace Whatsma\ZodiacSign;

use Whatsma\ZodiacSign\Calculator;
 
class EdgeCaseTest extends \PHPUnit_Framework_TestCase
{
    public function testAries()
    {
        // 21 March – 20 April
        $calculator = new Calculator;

        $this->assertTrue($calculator->calculate(20, 3) != "aries");
        $this->assertTrue($calculator->calculate(21, 3) == "aries");
        $this->assertTrue($calculator->calculate(20, 4) == "aries");
        $this->assertTrue($calculator->calculate(21, 4) != "aries");
    }
 
    public function testTaurus()
    {
        // 21 April – 21 May
        $calculator = new Calculator;

        $this->assertTrue($calculator->calculate(20, 4) != "taurus");
        $this->assertTrue($calculator->calculate(21, 4) == "taurus");
        $this->assertTrue($calculator->calculate(21, 5) == "taurus");
        $this->assertTrue($calculator->calculate(22, 5) != "taurus");
    }
 
    public function testGemini()
    {
        // 22 May – 21 June
        $calculator = new Calculator;

        $this->assertTrue($calculator->calculate(21, 5) != "gemini");
        $this->assertTrue($calculator->calculate(22, 5) == "gemini");
        $this->assertTrue($calculator->calculate(21, 6) == "gemini");
        $this->assertTrue($calculator->calculate(22, 6) != "gemini");
    }

    public function testCancer()
    {
        // 22 June – 22 July
        $calculator = new Calculator;

        $this->assertTrue($calculator->calculate(21, 6) != "cancer");
        $this->assertTrue($calculator->calculate(22, 6) == "cancer");
        $this->assertTrue($calculator->calculate(22, 7) == "cancer");
        $this->assertTrue($calculator->calculate(23, 7) != "cancer");
    }

    public function testLeo()
    {
        // 23 July – 22 August
        $calculator = new Calculator;

        $this->assertTrue($calculator->calculate(22, 7) != "leo");
        $this->assertTrue($calculator->calculate(23, 7) == "leo");
        $this->assertTrue($calculator->calculate(22, 8) == "leo");
        $this->assertTrue($calculator->calculate(23, 8) != "leo");
    }

    public function testVirgo()
    {
        // 23 August – 23 September
        $calculator = new Calculator;

        $this->assertTrue($calculator->calculate(22, 8) != "virgo");
        $this->assertTrue($calculator->calculate(23, 8) == "virgo");
        $this->assertTrue($calculator->calculate(23, 9) == "virgo");
        $this->assertTrue($calculator->calculate(24, 9) != "virgo");
    }

    public function testLibra()
    {
        // 24 September – 23 October
        $calculator = new Calculator;

        $this->assertTrue($calculator->calculate(23, 9) != "libra");
        $this->assertTrue($calculator->calculate(24, 9) == "libra");
        $this->assertTrue($calculator->calculate(23, 10) == "libra");
        $this->assertTrue($calculator->calculate(24, 10) != "libra");
    }

    public function testScorpio()
    {
        // 24 October – 22 November
        $calculator = new Calculator;

        $this->assertTrue($calculator->calculate(23, 10) != "scorpio");
        $this->assertTrue($calculator->calculate(24, 10) == "scorpio");
        $this->assertTrue($calculator->calculate(22, 11) == "scorpio");
        $this->assertTrue($calculator->calculate(23, 11) != "scorpio");
    }

    public function testSagittarius()
    {
        // 23 November – 21 December
        $calculator = new Calculator;

        $this->assertTrue($calculator->calculate(22, 11) != "sagittarius");
        $this->assertTrue($calculator->calculate(23, 11) == "sagittarius");
        $this->assertTrue($calculator->calculate(21, 12) == "sagittarius");
        $this->assertTrue($calculator->calculate(22, 12) != "sagittarius");
    }

    public function testCapricorn()
    {
        // 22 December – 20 January
        $calculator = new Calculator;

        $this->assertTrue($calculator->calculate(21, 12) != "capricorn");
        $this->assertTrue($calculator->calculate(22, 12) == "capricorn");
        $this->assertTrue($calculator->calculate(20, 1)  == "capricorn");
        $this->assertTrue($calculator->calculate(21, 1)  != "capricorn");
    }

    public function testAquarius()
    {
        // 21 January – 19 February
        $calculator = new Calculator;

        $this->assertTrue($calculator->calculate(20, 1) != "aquarius");
        $this->assertTrue($calculator->calculate(21, 1) == "aquarius");
        $this->assertTrue($calculator->calculate(19, 2)  == "aquarius");
        $this->assertTrue($calculator->calculate(20, 2)  != "aquarius");
    }

    public function testPisces()
    {
        // 20 February – 20 March
        $calculator = new Calculator;

        $this->assertTrue($calculator->calculate(19, 2) != "pisces");
        $this->assertTrue($calculator->calculate(20, 2) == "pisces");
        $this->assertTrue($calculator->calculate(20, 3) == "pisces");
        $this->assertTrue($calculator->calculate(21, 3) != "pisces");
    }
}
