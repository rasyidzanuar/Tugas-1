<?php

$value = 23;

$dec = ++$value;
$dec2 = ++$dec;

var_dump($value);
var_dump($dec);
var_dump($dec2);