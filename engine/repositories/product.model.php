<?php

function getProducts($mysqlConnect)
{
    $sql = 'SELECT * FROM products';
    $stmt = mysqli_query($mysqlConnect, $sql);
    $products = [];
    while ($row = mysqli_fetch_assoc($stmt)) {
        $products[] = $row;
    }

    return $products;
}

function getProduct($mysqlConnect, $id)
{
    $id = (int)$id;
    $sql = 'SELECT * FROM products WHERE id='.$id;
    $stmt = mysqli_query($mysqlConnect, $sql);
    $product = null;
    while ($row = mysqli_fetch_assoc($stmt)) {
        $product = $row;
        break;
    }

    return $product;
}

function deleteProduct($mysqlConnect, $id)
{
    $date = date('Y-m-d H:i:s');
    $sql = sprintf(
        'UPDATE products SET deleted_at="%s" WHERE id=%d',
        $date,
        (int)$id
    );
    mysqli_query($mysqlConnect, $sql);
    if (mysqli_error($mysqlConnect)) {
        return false;
    }

    return true;
}