<?php

require_once '../engine/init.php';

if ($_POST && isset($_POST['name'])) {
    $path = '/img/gallery/uploaded/'.$_FILES['picture']['name'];
    $uploadfile = __DIR__ . $path;
    if (!move_uploaded_file($_FILES['picture']['tmp_name'], $uploadfile)) {
        die('Cannot upload file');
    }

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
$galleryType = 'Страница галерея';
$search = $_GET['search'] ?? '';

require '../templates/main.php'
?>