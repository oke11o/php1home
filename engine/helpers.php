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

function getPageOpenCount()
{
    $filename = '../data/page_open_count.txt';

    $count = 1;
    if (file_exists($filename)) {
        $count = (int)file_get_contents($filename);
        $count++;
    }

    file_put_contents($filename, $count);

    return $count;
}

function copyFileAndGetPath($fieldName, $directory)
{
    $path = $directory.$_FILES[$fieldName]['name'];
    $uploadfile = ROOT_DIR.'public'.$path;
    if (!move_uploaded_file($_FILES[$fieldName]['tmp_name'], $uploadfile)) {
        die('Cannot upload file');
    }

    return $path;
}

function validateRegistrationData($email, $password, $confirmPassword)
{
    if ($password != $confirmPassword) {
        return 'Вы неверно подтвердили пароль';
    }
    if (mb_strlen($password) < 4) {
        return 'Пароль не может быть меньше 4 символов';
    }

    return null;
}