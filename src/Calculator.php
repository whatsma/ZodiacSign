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
        // check month is valid
        if (!isset($this->MONTHS[$month])) {
            throw new InvalidMonthException;
        }

        // check day is valid
        if (($day < 1) || ($day > $this->MONTHS[$month]['days_in_month'])) {
            throw new InvalidDayException;
        }

        // return first or second sign
        if ($day <= $this->MONTHS[$month]['split_day']) {
             return $this->MONTHS[$month]['first_sign'] ;
        } else {
              return $this->MONTHS[$month]['second_sign'];
        }
    }



    private $MONTHS = array(
          1 => array('name'             => 'january',
                     'split_day'        => 20,
                     'first_sign'       => 'capricorn',
                     'second_sign'      => 'aquarius',
                     'days_in_month'    => 31),
          2 => array('name'             => 'february',
                     'split_day'        => 19,
                     'first_sign'       => 'aquarius',
                     'second_sign'      => 'pisces',
                     'days_in_month'    => 29),
          3 => array('name'             => 'march',
                     'split_day'        => 20,
                     'first_sign'       => 'pisces',
                     'second_sign'      => 'aries',
                     'days_in_month'    => 31),
          4 => array('name'             => 'april',
                     'split_day'        => 20,
                     'first_sign'       => 'aries',
                     'second_sign'      => 'taurus',
                     'days_in_month'    => 30),
          5 => array('name'             => 'may',
                     'split_day'        => 21,
                     'first_sign'       => 'taurus',
                     'second_sign'      => 'gemini',
                     'days_in_month'    => 31),
          6 => array('name'             => 'june',
                     'split_day'        => 21,
                     'first_sign'       => 'gemini',
                     'second_sign'      => 'cancer',
                     'days_in_month'    => 30),
          7 => array('name'             => 'july',
                     'split_day'        => 22,
                     'first_sign'       => 'cancer',
                     'second_sign'      => 'leo',
                     'days_in_month'    => 31),
          8 => array('name'             => 'august',
                     'split_day'        => 22,
                     'first_sign'       => 'leo',
                     'second_sign'      => 'virgo',
                     'days_in_month'    => 31),
          9 => array('name'             => 'september',
                     'split_day'        => 23,
                     'first_sign'       => 'virgo',
                     'second_sign'      => 'libra',
                     'days_in_month'    => 30),
          10 => array('name'            => 'october',
                     'split_day'        => 23,
                     'first_sign'       => 'libra',
                     'second_sign'      => 'scorpio',
                     'days_in_month'    => 31),
          11 => array('name'            => 'november',
                     'split_day'        => 22,
                     'first_sign'       => 'scorpio',
                     'second_sign'      => 'sagittarius',
                     'days_in_month'    => 30),
          12 => array('name'            => 'december',
                     'split_day'        => 21,
                     'first_sign'       => 'sagittarius',
                     'second_sign'      => 'capricorn',
                     'days_in_month'    => 31));
}
