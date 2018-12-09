<?php

require_once '../engine/init.php';

$pageH1 = 'Отзывы';
$search = $_GET['search'] ?? '';
if ($_POST && isset($_POST['name']) && isset($_POST['text'])) {
    $name = $_POST['name'];
    $text = $_POST['text'];
    $sql = sprintf(
        "INSERT INTO reviews (name, text) VALUES ('%s', '%s')",
        mysqli_real_escape_string($mysqlConnect, (string)htmlspecialchars(strip_tags($name))),
        mysqli_real_escape_string($mysqlConnect, (string)htmlspecialchars(strip_tags($text)))
    );
    mysqli_query($mysqlConnect, $sql);
    if (mysqli_error($mysqlConnect)) {
        die(mysqli_error($mysqlConnect));
    }
    $id = mysqli_insert_id($mysqlConnect);
    header('Location: reviews.php?new_id='.$id);
    die;
}

require '../templates/reviews.php';
?>