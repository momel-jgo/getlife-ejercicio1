<?php

declare(strict_types=1);

require __DIR__ . "/vendor/autoload.php";

use lib\Fibonacci;

echo "Fibonacci entre timestamp de inicio y fin de mes actual\n";
$fibMonth = Fibonacci::curMonth();
echo !empty($fibMonth) ? implode(", ", $fibMonth) : "<<Sin resultados>>";

echo "\n----------------------\n";
echo "Fibonacci entre timestamp de inico y fin de año actual\n";
$fibYear = Fibonacci::curYear();
echo !empty($fibYear) ? implode(", ", $fibYear) : "<<Sin resultados>>";


echo "\n----------------------\n";
$initDate = "2022-02-21 12:00:00";
$endDate  = "2121-10-01 13:00:00";
echo "Fibonacci entre dos fechas en formato \"Y-m-d H:i:s\" ({$initDate} - {$endDate})\n";
$fibDates = Fibonacci::betweenDates($initDate, $endDate);
echo !empty($fibDates) ? implode(", ", $fibDates) : "<<Sin resultados>>";

