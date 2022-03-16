<?php

use classes\Finance;

include_once 'classes\internal_settings.php';

$moneyClass = new Finance();

$moneyClass->setMoney(20);

var_dump($moneyClass->countMoney());

$moneyClass->buy(5);

var_dump($moneyClass->countMoney());

$moneyClass->sale(15);

var_dump($moneyClass->countMoney());

