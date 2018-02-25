<?php

//задание 3
var_dump(3 / 1); //выводит int 3
var_dump(1 / 3); //выводит float 0.33333333333333
var_dump('20cats' + 40); //выводит int 60
var_dump(18 % 4); //выводит int 2

//задание 4
echo ($a = 2); //выводит 2
$x = ($y = 12) - 8; //переменной х будет присвоено значение 4
echo $x; //выводит 4

//задание 5
var_dump(1 == 1.0); //выводит boolean true
var_dump(1 === 1.0); //выводит boolean false
var_dump('02' == 2); //выводит boolean true
var_dump('02' === 2); //выводит boolean false
var_dump('02' == '2'); //выводит boolean true

//задание 6
$x = true xor true; //переменной х будет присвоено значение true
var_dump($x); //выводит boolean true