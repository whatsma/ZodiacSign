<?php
use Whatsma\ZodiacSign\Calculator;
 
class DaysInMonthsTest extends PHPUnit_Framework_TestCase {
 
    public function testInvalidMonth()
        {
        $calculator = new Calculator;

        $this->assertTrue($calculator->days_in_month(1) == 31);
        $this->assertTrue($calculator->days_in_month(2) == 29);
        $this->assertTrue($calculator->days_in_month(3) == 31);
        $this->assertTrue($calculator->days_in_month(4) == 30);
        $this->assertTrue($calculator->days_in_month(5) == 31);
        $this->assertTrue($calculator->days_in_month(6) == 30);
        $this->assertTrue($calculator->days_in_month(7) == 31);
        $this->assertTrue($calculator->days_in_month(8) == 31);
        $this->assertTrue($calculator->days_in_month(9) == 30);
        $this->assertTrue($calculator->days_in_month(10) == 31);
        $this->assertTrue($calculator->days_in_month(11) == 30);
        $this->assertTrue($calculator->days_in_month(12) == 31);
        }

}
