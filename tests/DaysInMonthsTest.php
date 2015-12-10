<?php
namespace Whatsma\ZodiacSign;

use Whatsma\ZodiacSign\Calculator;
use Whatsma\ZodiacSign\InvalidDayException;
 
class DaysInMonthsTest extends \PHPUnit_Framework_TestCase
{
    public function testDaysInJanuary()
    {
        $this->shouldPass (31, 1);
        $this->shouldFail (32, 1);
    }



    public function testDaysInFebruary()
    {
        $this->shouldPass(29, 2);
        $this->shouldFail(30, 2);
    }



    public function testDaysInMarch()
    {
        $this->shouldPass(31, 3);
        $this->shouldFail(32, 3);
    }



    public function testDaysInApril()
    {
        $this->shouldPass(30, 4);
        $this->shouldFail(31, 4);
    }



    public function testDaysInMay()
    {
        $this->shouldPass(31, 5);
        $this->shouldFail(32, 5);
    }



    public function testDaysInJune()
    {
        $this->shouldPass(30, 6);
        $this->shouldFail(31, 6);
    }



    public function testDaysInJuly()
    {
        $this->shouldPass(31, 7);
        $this->shouldFail(32, 7);
    }



    public function testDaysInAugust()
    {
        $this->shouldPass(31, 8);
        $this->shouldFail(32, 8);
    }



    public function testDaysInSeptember()
    {
        $this->shouldPass(30, 9);
        $this->shouldFail(31, 9);
    }



    public function testDaysInOctober()
    {
        $this->shouldPass(31, 10);
        $this->shouldFail(32, 10);
    }



    public function testDaysInNovember()
    {
        $this->shouldPass(30, 11);
        $this->shouldFail(31, 11);
    }



    public function testDaysInDecember()
    {
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
