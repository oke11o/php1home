<?php

require_once '../engine/init.php';

$pageH1 = 'Отзывы';
$search = $_GET['search'] ?? '';
if ($_POST && isset($_POST['name']) && isset($_POST['text'])) {
    $name = $_POST['name'];
    $text = $_POST['text'];
    $sql = sprintf("INSERT INTO reviews (name, text) VALUES ('%s', '%s')", $name, $text);
    mysqli_query($mysqlConnect, $sql);
    if (mysqli_error($mysqlConnect)) {
        die(mysqli_error($mysqlConnect));
    }
//    $id = mysqli_insert_id($mysqlConnect);
    header('Location: reviews.php');
    die;
}

require '../templates/reviews.php';
?>