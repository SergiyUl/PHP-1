<?php

function getImages()
{
    $dir = __DIR__ . '/files';
    $files = scandir($dir);
    return $files;
}


