<?php
namespace Whatsma\ZodiacSign;

use Whatsma\ZodiacSign\Calculator;
 
class InvalidDayOfMonthTest extends \PHPUnit\Framework\TestCase
{
    public function testInvalidDay()
    {
        $this->expectException(\Whatsma\ZodiacSign\InvalidDayException::class);
        $calculator = new Calculator;
        $calculator->calculate(30, 2);
    }
}
