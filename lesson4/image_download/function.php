<?php

function getImages()
{
    $dir = __DIR__ . '/images';
    $files = scandir($dir);
    return $files;
}


