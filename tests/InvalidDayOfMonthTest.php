<?php
namespace Whatsma\ZodiacSign;

use Whatsma\ZodiacSign\Calculator;
 
class InvalidDayOfMonthTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException Whatsma\ZodiacSign\InvalidDayException
     */
    public function testInvalidDay()
    {
        $calculator = new Calculator;
        $calculator->calculate(30, 2);
    }
}
