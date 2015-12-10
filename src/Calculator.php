<?php
namespace Whatsma\ZodiacSign;

class Calculator
{
    public function calculate($day, $month)
    {
        // validate day
        $day = intval($day);
        if (($day < 1) || ($day > $this->daysInMonth($month))) {
            throw new InvalidDayException();
        }
    
        // calculate zodiac sign
        switch ($month) {
            case 1:
                // january
                return $this->split($day, 20, "capricorn", "aquarius");
                break;

            case 2:
                // february
                return $this->split($day, 19, "aquarius", "pisces");
                break;

            case 3:
                // march
                return $this->split($day, 20, "pisces", "aries");
                break;

            case 4:
                // april
                return $this->split($day, 20, "aries", "taurus");
                break;

            case 5:
                // may
                return $this->split($day, 21, "taurus", "gemini");
                break;

            case 6:
                // june
                return $this->split($day, 21, "gemini", "cancer");
                break;

            case 7:
                // july
                return $this->split($day, 22, "cancer", "leo");
                break;

            case 8:
                // august
                return $this->split($day, 22, "leo", "virgo");
                break;

            case 9:
                // september
                return $this->split($day, 23, "virgo", "libra");
                break;

            case 10:
                // october
                return $this->split($day, 23, "libra", "scorpio");
                break;

            case 11:
                // november
                return $this->split($day, 22, "scorpio", "sagittarius");
                break;

            case 12:
                // december
                return $this->split($day, 21, "sagittarius", "capricorn");
                break;

            default:
                throw new InvalidMonthException();
        }
    }



    public function daysInMonth($month)
    {
        return $month == 2 ? 29 : (($month - 1) % 7 % 2 ? 30 : 31);
    }



    protected function split($day, $break, $firstSign, $secondSign)
    {
        return $day <= $break ? $firstSign : $secondSign;
    }
}
