# ZodiacSign
php calculator to calculate the zodiac sign for a given day and month.


## Status
[![Linux Build Status](https://travis-ci.org/whatsma/ZodiacSign.png)](https://travis-ci.org/whatsma/ZodiacSign)
[![Windows Build Status](https://ci.appveyor.com/api/projects/status/github/whatsma/zodiacsign?svg=true)](https://ci.appveyor.com/project/whatsma/zodiacsign)
[![Test Coverage](https://codeclimate.com/github/whatsma/ZodiacSign/badges/coverage.svg)](https://codeclimate.com/github/whatsma/ZodiacSign/coverage)
[![Code Climate](https://codeclimate.com/github/whatsma/ZodiacSign/badges/gpa.svg)](https://codeclimate.com/github/whatsma/ZodiacSign)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/whatsma/ZodiacSign/badges/quality-score.png)](https://scrutinizer-ci.com/g/whatsma/ZodiacSign)
[![GitHub license](https://img.shields.io/github/license/whatsma/ZodiacSign.svg)](https://github.com/whatsma/ZodiacSign/blob/master/LICENSE)


## Overview

Given a month (integer from 1 to 12) and a day (integer from 1 to 31), calculate the zodiac sign.

Returns a lower case string representing a zodiac sign, (eg "aries", or "leo").

Raises an InvalidMonthException:

* if the input month is invalid (eg is non int, or has a value of 13)

Raises an InvalidDayException:

* if the day is invalid (eg is non int, or has a value of 32)
* if the day is an invalid day of the month, such as 31st of February)

## See It In Action
[www.whatzodiacsignami.com](http://www.whatzodiacsignami.com)
