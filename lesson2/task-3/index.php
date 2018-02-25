<?php

$x =  include (__DIR__ . '/test.php');
var_dump($x);
$y =  include (__DIR__ . '/file.php');
var_dump($y);
$z = include (__DIR__ . '/calc.php');
var_dump($z);