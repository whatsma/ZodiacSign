<?php

require_once '../src/zodiacsign.php';


$day = 30;
$month = 2;

try {
    echo Whatsma\ZodiacSign\zodiac_sign($day, $month) . "\n";
} catch (Whatsma\ZodiacSign\InvalidMonthException $e) {
    print "INVALID MONTH: " . $e->getMessage() . "\n";
} catch (Whatsma\ZodiacSign\InvalidDayException $e) {
    print "INVALID DAY: " . $e->getMessage() . "\n";
} catch (Exception $e) {
    print "Exception: " . $e->getMessage() . "\n";
}
