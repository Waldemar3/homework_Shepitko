<?php

require_once("../vendor/autoload.php");

$format = new App\Currency("USD");

var_dump($format->equals(new App\Currency("USD")));

$money = new App\Money(99.99, $format);

var_dump($money->equals(new App\Money(99.99, $format)));
var_dump($money->add(new App\Money(99.99, $format)));

echo "<br><br>" . $money->getAmount() . " " . $format->getIsoCode();

