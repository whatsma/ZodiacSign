<?php
namespace Whatsma\ZodiacSign;

use Whatsma\ZodiacSign\Calculator;
 
class EdgeCaseTest extends \PHPUnit_Framework_TestCase
{
    public function testAries()
    {
        // 21 March – 20 April
        $start = array(21, 3);
        $end = array (20, 4);

        $this->edgeCases($start, $end, "aries");
    }
 
    public function testTaurus()
    {
        // 21 April – 21 May
        $start = array(21, 4);
        $end = array (21, 5);

        $this->edgeCases($start, $end, "taurus");
    }
 
    public function testGemini()
    {
        // 22 May – 21 June
        $start = array(22, 5);
        $end = array (21, 6);

        $this->edgeCases($start, $end, "gemini");
    }

    public function testCancer()
    {
        // 22 June – 22 July
        $start = array(22, 6);
        $end = array (22, 7);

        $this->edgeCases($start, $end, "cancer");
    }

    public function testLeo()
    {
        // 23 July – 22 August
        $start = array(23, 7);
        $end = array (22, 8);

        $this->edgeCases($start, $end, "leo");
    }

    public function testVirgo()
    {
        // 23 August – 23 September
        $start = array(23, 8);
        $end = array (23, 9);

        $this->edgeCases($start, $end, "virgo");
    }

    public function testLibra()
    {
        // 24 September – 23 October
        $start = array(24, 9);
        $end = array (23, 10);

        $this->edgeCases($start, $end, "libra");
    }

    public function testScorpio()
    {
        // 24 October – 22 November
        $start = array(24, 10);
        $end = array (22, 11);

        $this->edgeCases($start, $end, "scorpio");
    }

    public function testSagittarius()
    {
        // 23 November – 21 December
        $start = array(23, 11);
        $end = array (21, 12);

        $this->edgeCases($start, $end, "sagittarius");
    }

    public function testCapricorn()
    {
        // 22 December – 20 January
        $start = array(22, 12);
        $end = array (20, 1);

        $this->edgeCases($start, $end, "capricorn");
    }

    public function testAquarius()
    {
        // 21 January – 19 February
        $start = array(21, 1);
        $end = array (19, 2);

        $this->edgeCases($start, $end, "aquarius");
    }

    public function testPisces()
    {
        // 20 February – 20 March
        $start = array(20, 2);
        $end = array (20, 3);

        $this->edgeCases($start, $end, "pisces");
    }

    protected function edgeCases($first, $last, $sign)
    {
        $calculator = new Calculator;

        // day before first day
        $this->assertFalse($calculator->calculate($first[0]-1, $first[1])==$sign);

        // first day
        $this->assertTrue($calculator->calculate($first[0], $first[1])==$sign);

        // last day
        $this->assertTrue($calculator->calculate($last[0], $last[1])==$sign);

        // day after last day
        $this->assertFalse($calculator->calculate($last[0]+1, $last[1])==$sign);
    }
}
