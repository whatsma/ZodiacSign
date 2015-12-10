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
            case 1: // january
                if ($day <= 20) {
                    return "capricorn";
                } else {
                    return "aquarius";
                }
                break;

            case 2: // february
                if ($day <= 19) {
                    return "aquarius";
                } else {
                    return "pisces";
                }
                break;

            case 3: // march
                if ($day <= 20) {
                    return "pisces";
                } else {
                    return "aries";
                }
                break;

            case 4: // april
                if ($day <= 20) {
                    return "aries";
                } else {
                    return "taurus";
                }
                break;

            case 5: // may
                if ($day <= 21) {
                    return "taurus";
                } else {
                    return "gemini";
                }
                break;

            case 6: // june
                if ($day <= 21) {
                    return "gemini";
                } else {
                    return "cancer";
                }
                break;

            case 7: // july
                if ($day <= 22) {
                    return "cancer";
                } else {
                    return "leo";
                }
                break;

            case 8: // august
                if ($day <= 22) {
                    return "leo";
                } else {
                    return "virgo";
                }
                break;

            case 9: // september
                if ($day <= 23) {
                    return "virgo";
                } else {
                    return "libra";
                }
                break;

            case 10: // october
                if ($day <= 23) {
                    return "libra";
                } else {
                    return "scorpio";
                }
                break;

            case 11: // november
                if ($day <= 22) {
                    return "scorpio";
                } else {
                    return "sagittarius";
                }
                break;

            case 12: // december
                if ($day <= 21) {
                    return "sagittarius";
                } else {
                    return "capricorn";
                }
                break;

            default:
                throw new InvalidMonthException();
        }
    }



    public function daysInMonth($month)
    {
        return $month == 2 ? 29 : (($month - 1) % 7 % 2 ? 30 : 31);
    }
}
