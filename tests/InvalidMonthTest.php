<?php
namespace Whatsma\ZodiacSign;

use Whatsma\ZodiacSign\Calculator;
 
class InvalidMonthTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException Whatsma\ZodiacSign\InvalidMonthException
     */
    public function testInvalidMonth()
    {
        $calculator = new Calculator;
        $calculator->calculate(1, 13);
    }
}
