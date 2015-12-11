<?php
namespace Whatsma\ZodiacSign;

use Whatsma\ZodiacSign\Calculator;
use Whatsma\ZodiacSign\InvalidDayException;
 
class DaysInMonthsTest extends \PHPUnit_Framework_TestCase
{
    public function testDays()
    {
        // january
        $this->shouldPass(31, 1);
        $this->shouldFail(32, 1);

        // february
        $this->shouldPass(29, 2);
        $this->shouldFail(30, 2);

        // march
        $this->shouldPass(31, 3);
        $this->shouldFail(32, 3);

        // april
        $this->shouldPass(30, 4);
        $this->shouldFail(31, 4);

        // may
        $this->shouldPass(31, 5);
        $this->shouldFail(32, 5);

        // june
        $this->shouldPass(30, 6);
        $this->shouldFail(31, 6);

        // july
        $this->shouldPass(31, 7);
        $this->shouldFail(32, 7);

        // august
        $this->shouldPass(31, 8);
        $this->shouldFail(32, 8);

        // september
        $this->shouldPass(30, 9);
        $this->shouldFail(31, 9);

        // october
        $this->shouldPass(31, 10);
        $this->shouldFail(32, 10);

        // november
        $this->shouldPass(30, 11);
        $this->shouldFail(31, 11);

        // december
        $this->shouldPass(31, 12);
        $this->shouldFail(32, 12);
    }



    public function shouldFail($day, $month)
    {
        $this->setExpectedException('Whatsma\ZodiacSign\InvalidDayException');
        $calculator = new Calculator;
        $calculator->calculate($day, $month);
        $this->fail('An exception should have been raised.');
    }



    public function shouldPass($day, $month)
    {
        $calculator = new Calculator;
        $calculator->calculate($day, $month);
    }
}
