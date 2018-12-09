<?php

require_once '../engine/init.php';

$pageH1 = 'Галерея';
$galleryType = 'Страница галерея';
$search = $_GET['search'] ?? '';

require '../templates/main.php'
?>