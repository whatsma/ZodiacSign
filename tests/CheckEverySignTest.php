<?php
namespace Whatsma\ZodiacSign;

use Whatsma\ZodiacSign\Calculator;
 
class CheckEverySignTest extends \PHPUnit_Framework_TestCase
{
 
    public function testInvalidMonth()
    {
        $calculator = new Calculator;

        $this->assertTrue($calculator->calculate(1, 1) == "capricorn");
        $this->assertTrue($calculator->calculate(1, 2) == "aquarius");
        $this->assertTrue($calculator->calculate(1, 3) == "pisces");
        $this->assertTrue($calculator->calculate(1, 4) == "aries");
        $this->assertTrue($calculator->calculate(1, 5) == "taurus");
        $this->assertTrue($calculator->calculate(1, 6) == "gemini");
        $this->assertTrue($calculator->calculate(1, 7) == "cancer");
        $this->assertTrue($calculator->calculate(1, 8) == "leo");
        $this->assertTrue($calculator->calculate(1, 9) == "virgo");
        $this->assertTrue($calculator->calculate(1, 10) == "libra");
        $this->assertTrue($calculator->calculate(1, 11) == "scorpio");
        $this->assertTrue($calculator->calculate(1, 12) == "sagittarius");
    }
}
