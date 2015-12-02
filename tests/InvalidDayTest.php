<?php
namespace Whatsma\ZodiacSign;

use Whatsma\ZodiacSign\Calculator;
 
class InvalidDayTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException Whatsma\ZodiacSign\InvalidDayException
     */
    public function testInvalidDay()
    {
        $calculator = new Calculator;
        $calculator->calculate(33, 1);
    }
}
