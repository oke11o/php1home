<?php

require_once '../../../engine/init.php';

$pageH1 = 'Админка каталога';

if ($_POST) {
    $image = '';
    if (isset($_FILES['image']) && $_FILES['image']['tmp_name']) {
        $image = copyFileAndGetPath('image', '/img/products/');
    }
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = (float)$_POST['price'];
    $category = $_POST['category'];

    $errors = validateProductData($name, $description, $category, $price, $image);

    if (empty($errors)) {
        $id = createProduct($mysqlConnect, $name, $description, $category, $price, $image);

        header('Location: index.php?new_id='.$id);
        die;
    }
}

require ROOT_DIR.'templates/admin/catalog/index.php';

function validateProductData($name, $description, $category, $price, $image)
{
    return [];
}