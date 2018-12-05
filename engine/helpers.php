<?php

function getImages($dir)
{
    if (!file_exists($dir)) {
        return false;
    }
    $files = scandir($dir);
    $images = [];
    foreach ($files as $file) {
        $mimeType = mime_content_type($dir.'/'.$file);
        if (strpos($mimeType, 'image') === 0) {
            $images[] = '/img/gallery/'.$file;
        }
    }

    return $images;
}

function getPageOpenCount() {
    $filename = '../data/page_open_count.txt';

    $count = 1;
    if (file_exists($filename)) {
        $count = (int) file_get_contents($filename);
        $count++;
    }

    file_put_contents($filename, $count);

    return $count;
}