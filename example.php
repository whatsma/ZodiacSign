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
