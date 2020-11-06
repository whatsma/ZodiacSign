# ZodiacSign
PHP calculator to calculate the zodiac sign for a given day and month.

## Status

[![Total Downloads](https://poser.pugx.org/whatsma/zodiacsign/downloads)](https://packagist.org/packages/whatsma/zodiacsign)
[![Latest Stable Version](https://poser.pugx.org/whatsma/zodiacsign/v/stable)](https://packagist.org/packages/whatsma/zodiacsign)

[![Linux Build Status](https://img.shields.io/travis/whatsma/ZodiacSign/master.svg?label=unix%20build)](https://travis-ci.org/whatsma/ZodiacSign)
[![Windows Build Status](https://img.shields.io/appveyor/ci/whatsma/ZodiacSign/master.svg?label=windows%20build)](https://ci.appveyor.com/project/whatsma/zodiacsign)

[![Test Coverage](https://codeclimate.com/github/whatsma/ZodiacSign/badges/coverage.svg)](https://codeclimate.com/github/whatsma/ZodiacSign/coverage)
[![Code Climate](https://codeclimate.com/github/whatsma/ZodiacSign/badges/gpa.svg)](https://codeclimate.com/github/whatsma/ZodiacSign)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/whatsma/ZodiacSign/badges/quality-score.png)](https://scrutinizer-ci.com/g/whatsma/ZodiacSign)

[![GitHub license](https://img.shields.io/github/license/whatsma/ZodiacSign.svg)](https://github.com/whatsma/ZodiacSign/blob/master/LICENSE)


## Installation

The easiest way to install ZodiacSign is using [Composer](https://getcomposer.org/).

```bash
$ composer require whatsma/zodiacsign:^1.0
```

ZodiacSign requires PHP 5.4 or later.

## Overview

Given a month (integer from 1 to 12) and a day (integer from 1 to 31), calculate the zodiac sign.

Returns a lower case string representing a zodiac sign, (eg "aries", or "leo").

Raises an InvalidMonthException:

* if the input month is invalid (eg is non int, or has a value of 13)

Raises an InvalidDayException:

* if the day is invalid (eg is non int, or has a value of 32)
* if the day is an invalid day of the month, such as 31st of February)

## Example

```php
<?php
require_once __DIR__.'/vendor/autoload.php';

use Whatsma\ZodiacSign;

$calculator = new ZodiacSign\Calculator();

try {
    $day = 17;
    $month = 8;
    $zodiacSign = $calculator->calculate($day, $month);
    echo $zodiacSign . "\n";
} catch (ZodiacSign\InvalidDayException $e) {
    echo "ERROR: Invalid Day";
} catch (ZodiacSign\InvalidMonthException $e) {
    echo "ERROR: Invalid Month";
}
```

## ZodiacSign Calculator in the wild

* [Sun Sign Calculator](https://www.sunsigncalculator.com)
* [What Zodiac Sign Am I?](https://www.whatzodiacsignami.com)
* [What Star Sign Am I?](https://www.whatstarsignami.com)
* [What Sign Am I?](https://www.whatsignami.com)
