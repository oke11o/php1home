<?php

require_once '../../../engine/init.php';

$pageH1 = 'Админка каталога';

if ($_POST) {
    $image = '';
    if (isset($_FILES['image']) && $_FILES['image']['tmp_name']) {
        $image = '/img/products/'.$_FILES['image']['name'];
        $uploadfile = ROOT_DIR.'public'.$image;
        if (!move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
            die('Cannot upload file');
        }
    }
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = (float)$_POST['price'];
    $category = $_POST['category'];

    $sql = sprintf(
        "INSERT INTO products (name, description, category, price, image) VALUES ('%s', '%s', '%s', '%s', '%s')",
        mysqli_real_escape_string($mysqlConnect, (string)htmlspecialchars(strip_tags($name))),
        mysqli_real_escape_string($mysqlConnect, (string)htmlspecialchars(strip_tags($description))),
        mysqli_real_escape_string($mysqlConnect, (string)htmlspecialchars(strip_tags($category))),
        $price,
        $image
    );
    mysqli_query($mysqlConnect, $sql);
    if (mysqli_error($mysqlConnect)) {
        die(mysqli_error($mysqlConnect));
    }
    $id = mysqli_insert_id($mysqlConnect);
    header('Location: index.php?new_id='.$id);
    die;
}

require ROOT_DIR.'templates/admin/catalog/index.php';