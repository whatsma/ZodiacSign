<?php
namespace Whatsma\ZodiacSign;

use Whatsma\ZodiacSign\Calculator;
 
class EdgeCaseTest extends \PHPUnit_Framework_TestCase
{
    public function testSigns()
    {
        // 21 March – 20 April - aries
        $this->edgeCases(array(21, 3), array(20, 4), "aries");

        // 21 April – 21 May - taurus
        $this->edgeCases(array(21, 4), array(21, 5), "taurus");

        // 22 May – 21 June - gemini
        $this->edgeCases(array(22, 5), array(21, 6), "gemini");

        // 22 June – 22 July - cancer
        $this->edgeCases(array(22,6), array(22, 7), "cancer");

        // 23 July – 22 August - leo
        $this->edgeCases(array(23, 7), array(22, 8), "leo");

        // 23 August – 23 September - virgo
        $this->edgeCases(array(23, 8), array(23, 9), "virgo");

        // 24 September – 23 October - libra
        $this->edgeCases(array(24, 9), array(23, 10), "libra");

        // 24 October – 22 November - scorpio
        $this->edgeCases(array(24, 10), array(22, 11), "scorpio");

        // 23 November – 21 December - sagittarius
        $this->edgeCases(array(23, 11), array(21, 12), "sagittarius");

        // 22 December – 20 January - capricorn
        $this->edgeCases(array(22, 12), array(20, 1), "capricorn");

        // 21 January – 19 February - aquarius
        $this->edgeCases(array(21, 1), array(19, 2), "aquarius");

        // 20 February – 20 March - pisces
        $this->edgeCases(array(20, 2), array(20, 3), "pisces");
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
