<?php
namespace Whatsma\ZodiacSign;

use Whatsma\ZodiacSign\Calculator;
 
class InvalidMonthTest extends \PHPUnit\Framework\TestCase
{
    public function testInvalidMonth()
    {
        $this->expectException(\Whatsma\ZodiacSign\InvalidMonthException::class);
        $calculator = new Calculator;
        $calculator->calculate(1, 13);
    }
}
