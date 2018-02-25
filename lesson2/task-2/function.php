<?php

function discriminant($a, $b, $c)
{
    $d = pow($b, 2) - 4 * $a * $c;
    return $d;
}