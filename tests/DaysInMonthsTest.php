<?php
namespace Whatsma\ZodiacSign;

use Whatsma\ZodiacSign\Calculator;
 
class DaysInMonthsTest extends \PHPUnit_Framework_TestCase
{
    public function testInvalidMonth()
    {
        $calculator = new Calculator;

        $this->assertTrue($calculator->daysInMonth(1) == 31);
        $this->assertTrue($calculator->daysInMonth(2) == 29);
        $this->assertTrue($calculator->daysInMonth(3) == 31);
        $this->assertTrue($calculator->daysInMonth(4) == 30);
        $this->assertTrue($calculator->daysInMonth(5) == 31);
        $this->assertTrue($calculator->daysInMonth(6) == 30);
        $this->assertTrue($calculator->daysInMonth(7) == 31);
        $this->assertTrue($calculator->daysInMonth(8) == 31);
        $this->assertTrue($calculator->daysInMonth(9) == 30);
        $this->assertTrue($calculator->daysInMonth(10) == 31);
        $this->assertTrue($calculator->daysInMonth(11) == 30);
        $this->assertTrue($calculator->daysInMonth(12) == 31);
    }
}
