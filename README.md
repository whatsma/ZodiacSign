<p align="center">
  <img src="https://github.com/whatsma/ZodiacSign/blob/main/logo/zodiac-sign.png"
       alt="Zodiac Sign Calculator in PHP"
       width="400" />
</p>

# Zodiac Sign Calculator
A PHP calculator to calculate the zodiac sign for a given day and month.


## Status

[![Total Downloads](https://poser.pugx.org/whatsma/zodiacsign/downloads)](https://packagist.org/packages/whatsma/zodiacsign)
[![Latest Stable Version](https://poser.pugx.org/whatsma/zodiacsign/v/stable)](https://packagist.org/packages/whatsma/zodiacsign)
[![PHP Version Require](http://poser.pugx.org/whatsma/ZodiacSign/require/php)](https://packagist.org/packages/whatsma/zodiacsign)

[![Multi PHP Versions](https://github.com/whatsma/ZodiacSign/actions/workflows/ci-multiple-php-versions.yml/badge.svg)](https://github.com/whatsma/ZodiacSign/actions/workflows/ci-multiple-php-versions.yml)
[![Windows/Mac](https://github.com/whatsma/ZodiacSign/actions/workflows/ci-windows-mac.yml/badge.svg)](https://github.com/whatsma/ZodiacSign/actions/workflows/ci-windows-mac.yml)
[![Static Code Analysis](https://github.com/whatsma/ZodiacSign/actions/workflows/ci-static.yml/badge.svg)](https://github.com/whatsma/ZodiacSign/actions/workflows/ci-static.yml)

[![Test Coverage](https://codeclimate.com/github/whatsma/ZodiacSign/badges/coverage.svg)](https://codeclimate.com/github/whatsma/ZodiacSign/coverage)
[![Code Climate](https://codeclimate.com/github/whatsma/ZodiacSign/badges/gpa.svg)](https://codeclimate.com/github/whatsma/ZodiacSign)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/whatsma/ZodiacSign/badges/quality-score.png)](https://scrutinizer-ci.com/g/whatsma/ZodiacSign)

[![GitHub license](https://img.shields.io/github/license/whatsma/ZodiacSign.svg)](https://github.com/whatsma/ZodiacSign/blob/master/LICENSE)


## Installation

Install ZodiacSign using [Composer](https://getcomposer.org/):

```bash
$ composer require whatsma/zodiacsign:^1.0
```

## Usage

Given a month (integer from 1 to 12) and a day (integer from 1 to 31), calculate the zodiac sign.

Returns a lower case string representing a zodiac sign, (eg "aries", or "leo").

Raises an InvalidMonthException:

* if the input month is invalid (eg is non int, or has a value of 13)

Raises an InvalidDayException:

* if the day is invalid (eg is non int, or has a value of 32)
* if the day is an invalid day of the month, such as 31st of February)

### Example

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

// output: "leo"
```

## Zodiac Sign Calculator out there, in the wild

* [What Zodiac Sign Am I?](https://www.whatzodiacsignami.com)
* [Sun Sign Calculator](https://www.sunsigncalculator.com)
* [What Star Sign Am I?](https://www.whatstarsignami.com)
* [What Sign Am I?](https://www.whatsignami.com)
