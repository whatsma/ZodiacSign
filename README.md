# ZodiacSign
Calculates zodiac sign from day and month.

### Status
[![Build Status](https://travis-ci.org/whatsma/ZodiacSign.png)](https://travis-ci.org/whatsma/ZodiacSign)
[![Test Coverage](https://codeclimate.com/github/whatsma/ZodiacSign/badges/coverage.svg)](https://codeclimate.com/github/whatsma/ZodiacSign/coverage)
[![Code Climate](https://codeclimate.com/github/whatsma/ZodiacSign/badges/gpa.svg)](https://codeclimate.com/github/whatsma/ZodiacSign)


Given a month (integer from 1 to 12) and a day (integer from 1 to 31), calculate the zodiac sign.

Returns one of the following strings, representing the zodiac sign:

* aries
* taurus
* gemini
* cancer
* leo
* virgo
* libra
* scorpio
* sagittarius
* capricorn
* aquarius 
* pisces

Or raises an Exception if the input month and day are invalid (or represent an invalid day of the year, such as 31st of February).
