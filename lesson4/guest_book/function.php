<?php

function getBook()
{
    $dir = __DIR__ . '/guestBook.txt';
    $array = file($dir, FILE_IGNORE_NEW_LINES);
    return $array;
}