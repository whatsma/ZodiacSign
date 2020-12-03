<?php
namespace Whatsma\ZodiacSign;

use Whatsma\ZodiacSign\Calculator;
 
class InvalidDayTest extends \PHPUnit\Framework\TestCase
{
    public function testInvalidDay()
    {
        $this->expectException(\Whatsma\ZodiacSign\InvalidDayException::class);
        $calculator = new Calculator;
        $calculator->calculate(33, 1);
    }
}
