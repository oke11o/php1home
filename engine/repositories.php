<?php

function getEmployees($mysqlConnect, $search = '', $orderDir = 'ASC')
{
    $sql = 'SELECT * FROM employee';
    if ($search) {
        $sql .= ' WHERE first_name LIKE "%'.$search.'%"';
    }
    $sql .= sprintf(' ORDER BY first_name %s;', $orderDir);
    $stmt = mysqli_query($mysqlConnect, $sql);
    if (mysqli_error($mysqlConnect)) {
        die(mysqli_error($mysqlConnect));
    }
    $employees = [];
    while ($row = mysqli_fetch_assoc($stmt)) {
        $employees[] = $row;
    }

    return $employees;
}

function getPicturesFromDb($mysqlConnect)
{
    $sql = 'SELECT * FROM pictures';
    $stmt = mysqli_query($mysqlConnect, $sql);
    $pictures = [];
    while ($row = mysqli_fetch_assoc($stmt)) {
        $pictures[] = $row['path'];
    }

    return $pictures;
}

function getPicturesAssoc($mysqlConnect, $gallery = '')
{
    $sql = 'SELECT * FROM pictures';
    if ($gallery) {
        $sql .= sprintf(' WHERE gallery="%s"', $gallery);
    }
    $stmt = mysqli_query($mysqlConnect, $sql);
    $pictures = [];
    while ($row = mysqli_fetch_assoc($stmt)) {
        $pictures[] = $row;
    }

    return $pictures;
}

function getReviews($mysqlConnect)
{
    $sql = 'SELECT * FROM reviews';
    $stmt = mysqli_query($mysqlConnect, $sql);
    $reviews = [];
    while ($row = mysqli_fetch_assoc($stmt)) {
        $reviews[] = $row;
    }

    return $reviews;
}

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