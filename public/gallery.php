<?php

require_once '../engine/init.php';

if ($_POST && isset($_POST['name'])) {

    $path = copyFileAndGetPath('picture', '/img/gallery/uploaded/');

    $name = $_POST['name'];
    $gallery = $_POST['gallery'];
    $sql = sprintf(
        "INSERT INTO pictures (name, path, gallery) VALUES ('%s', '%s', '%s')",
        mysqli_real_escape_string($mysqlConnect, (string)htmlspecialchars(strip_tags($name))),
        $path,
        mysqli_real_escape_string($mysqlConnect, (string)htmlspecialchars(strip_tags($gallery)))
    );
    mysqli_query($mysqlConnect, $sql);
    if (mysqli_error($mysqlConnect)) {
        die(mysqli_error($mysqlConnect));
    }
    $id = mysqli_insert_id($mysqlConnect);
    header('Location: gallery.php?new_id='.$id);
    die;
}

$pageH1 = 'Галерея';
$pageTitle = 'Галерея';
$galleryType = 'Страница галерея';
$search = $_GET['search'] ?? '';

$images = getPicturesAssoc($mysqlConnect, $galleryType);
$galleryMarkup = getGalleryItemsTpl($images);

require '../templates/gallery.php';