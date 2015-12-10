<?php
namespace Whatsma\ZodiacSign;

class Calculator
{
    public function calculate($day, $month)
    {
        switch ($month) {
            case 1:
                // january
                return $this->monthSplit($day, 20, "capricorn", "aquarius", 31);
                break;

            case 2:
                // february
                return $this->monthSplit($day, 19, "aquarius", "pisces", 29);
                break;

            case 3:
                // march
                return $this->monthSplit($day, 20, "pisces", "aries", 31);
                break;

            case 4:
                // april
                return $this->monthSplit($day, 20, "aries", "taurus", 30);
                break;

            case 5:
                // may
                return $this->monthSplit($day, 21, "taurus", "gemini", 31);
                break;

            case 6:
                // june
                return $this->monthSplit($day, 21, "gemini", "cancer", 30);
                break;

            case 7:
                // july
                return $this->monthSplit($day, 22, "cancer", "leo", 31);
                break;

            case 8:
                // august
                return $this->monthSplit($day, 22, "leo", "virgo", 31);
                break;

            case 9:
                // september
                return $this->monthSplit($day, 23, "virgo", "libra", 30);
                break;

            case 10:
                // october
                return $this->monthSplit($day, 23, "libra", "scorpio", 31);
                break;

            case 11:
                // november
                return $this->monthSplit($day, 22, "scorpio", "sagittarius", 30);
                break;

            case 12:
                // december
                return $this->monthSplit($day, 21, "sagittarius", "capricorn", 31);
                break;

            default:
                throw new InvalidMonthException();
        }
    }



    protected function monthSplit($day, $break, $firstSign, $secondSign, $maximumDaysInMonth)
    {
        if (($day < 1) || ($day > $maximumDaysInMonth)) {
            throw new InvalidDayException();
        }

        return $day <= $break ? $firstSign : $secondSign;
    }
}
