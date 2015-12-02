<?php
namespace Whatsma\ZodiacSign;

class Calculator
{
    public function calculate($day, $month)
    {
        // validate month
        $month = intval($month);
        if (($month < 1) || ($month > 12)) {
            throw new InvalidMonthException();
        }
    
        // validate day
        $day = intval($day);
        if (($day < 1) || ($day > $this->daysInMonth($month))) {
            throw new InvalidDayException();
        }
    
    
        // calculate zodiac sign
        if (($month==1 && $day>20) || ($month==2 && $day<20)) {
             return "aquarius";
        } elseif (($month==2 && $day>18 ) || ($month==3 && $day<21)) {
             return "pisces";
        } elseif (($month==3 && $day>20) || ($month==4 && $day<21)) {
             return "aries";
        } elseif (($month==4 && $day>20) || ($month==5 && $day<22)) {
             return "taurus";
        } elseif (($month==5 && $day>21) || ($month==6 && $day<22)) {
             return "gemini";
        } elseif (($month==6 && $day>21) || ($month==7 && $day<24)) {
             return "cancer";
        } elseif (($month==7 && $day>23) || ($month==8 && $day<24)) {
             return "leo";
        } elseif (($month==8 && $day>23) || ($month==9 && $day<24)) {
             return "virgo";
        } elseif (($month==9 && $day>23) || ($month==10 && $day<24)) {
             return "libra";
        } elseif (($month==10 && $day>23) || ($month==11 && $day<23)) {
             return "scorpio";
        } elseif (($month==11 && $day>22) || ($month==12 && $day<23)) {
             return "sagittarius";
        } elseif (($month==12 && $day>22) || ($month==1 && $day<21)) {
             return "capricorn";
        }
    }



    public function daysInMonth($month)
    {
        return $month == 2 ? 29 : (($month - 1) % 7 % 2 ? 30 : 31);
    }
}
