<?php

$dir = __DIR__ . '/images';

function getImages($dir) {
    $images = scandir($dir);
    foreach ($images as $image) {
        if ('.' != $image && '..' != $image) {
            $imagesNew[] = $image;
        }
    }
    return $imagesNew;
}