<?php
/**
 * ZodiacSign (https://github.com/whatsma/ZodiacSign)
 *
 * @link      https://github.com/whatsma/ZodiacSign
 * @license   MIT License
 */
namespace Whatsma\ZodiacSign;

class Calculator
{
    /**
     * @access public
     * @param int $day day of the month, a number between 1 and 31
     * @param int $month month of the year, a number between 1 and 12
     * @return string the zodiac sign, in lower case.
     * @throws InvalidDayException input day is invalid
     * @throws InvalidMonthException input month is invalid
     */
    public function calculate($day, $month)
    {
        switch ($month) {
            case 1:
                // january
                return $this->monthSplit($day, 20, "capricorn", "aquarius", 31);

            case 2:
                // february
                return $this->monthSplit($day, 19, "aquarius", "pisces", 29);

            case 3:
                // march
                return $this->monthSplit($day, 20, "pisces", "aries", 31);

            case 4:
                // april
                return $this->monthSplit($day, 20, "aries", "taurus", 30);

            case 5:
                // may
                return $this->monthSplit($day, 21, "taurus", "gemini", 31);

            case 6:
                // june
                return $this->monthSplit($day, 21, "gemini", "cancer", 30);

            case 7:
                // july
                return $this->monthSplit($day, 22, "cancer", "leo", 31);

            case 8:
                // august
                return $this->monthSplit($day, 22, "leo", "virgo", 31);

            case 9:
                // september
                return $this->monthSplit($day, 23, "virgo", "libra", 30);

            case 10:
                // october
                return $this->monthSplit($day, 23, "libra", "scorpio", 31);

            case 11:
                // november
                return $this->monthSplit($day, 22, "scorpio", "sagittarius", 30);

            case 12:
                // december
                return $this->monthSplit($day, 21, "sagittarius", "capricorn", 31);

            default:
                throw new InvalidMonthException();
        }
    }

    /**
     * @access private
     * @param int $day
     * @param int $break
     * @param string $firstSign
     * @param string $secondSign
     * @param int $maximumDaysInMonth
     * @return string
     */
    protected function monthSplit($day, $break, $firstSign, $secondSign, $maximumDaysInMonth)
    {
        if (($day < 1) || ($day > $maximumDaysInMonth)) {
            throw new InvalidDayException();
        }

        return $day <= $break ? $firstSign : $secondSign;
    }
}
