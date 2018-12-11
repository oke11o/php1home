<?php

require_once '../../../engine/init.php';

$id = $_GET['id'] ?? null;
if (!$id) {
    die('Не валидный запрос');
}
$product = getProduct($mysqlConnect, $id);
if (!$product) {
    die('Не могу найти продукт с id='.$id);
}

$pageH1 = sprintf('Редактирование товара "%s"', $product['name']);

if ($_POST) {
    $image = $product['image'];
    if (isset($_FILES['image']) && $_FILES['image']['tmp_name']) {
        $image = '/img/products/'.$_FILES['image']['name'];
        $uploadfile = __DIR__ . $image;
        if (!move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
            die('Cannot upload file');
        }
    }
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = (float) $_POST['price'];
    $category = $_POST['category'];

    $sql = sprintf(
        'UPDATE products SET name="%s", description="%s", category="%s", price="%s", image="%s" WHERE id=%d',
        mysqli_real_escape_string($mysqlConnect, (string)htmlspecialchars(strip_tags($name))),
        mysqli_real_escape_string($mysqlConnect, (string)htmlspecialchars(strip_tags($description))),
        mysqli_real_escape_string($mysqlConnect, (string)htmlspecialchars(strip_tags($category))),
        $price,
        $image,
        $id
    );
    echo $sql;
    mysqli_query($mysqlConnect, $sql);
    if (mysqli_error($mysqlConnect)) {
        die(mysqli_error($mysqlConnect));
    }

    $message = 'Успешно отреактирван продукт с id='.$id;
    header('Location: index.php?message='.$message);
}

require ROOT_DIR.'templates/admin/catalog/edit.php';