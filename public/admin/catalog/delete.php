<?php

require_once '../../../engine/init.php';

$message = 'Не валидный запрос';
if ($_POST && isset($_POST['product_id'])) {
    $id = (int)$_POST['product_id'];
    if (deleteProduct($mysqlConnect, $id)) {
        $message = 'Успешно удален продукт с id='.$id;
    }
}

header('Location: index.php?message='.$message);