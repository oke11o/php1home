<?php

function getEmployees($mysqliConnect, $search = '', $orderDir = 'ASC')
{
    $sql = 'SELECT * FROM employee';
    if ($search) {
        $sql .= ' WHERE first_name LIKE "%'.$search.'%"';
    }
    $sql .= sprintf(' ORDER BY first_name %s;', $orderDir);
    $stmt = mysqli_query($mysqliConnect, $sql);
    if (mysqli_error($mysqliConnect)) {
        die(mysqli_error($mysqliConnect));
    }
    $employees = [];
    while ($row = mysqli_fetch_assoc($stmt)) {
        $employees[] = $row;
    }

    return $employees;
}

function getPicturesFromDb($mysqliConnect)
{
    $sql = 'SELECT * FROM pictures';
    $stmt = mysqli_query($mysqliConnect, $sql);
    $pictures = [];
    while ($row = mysqli_fetch_assoc($stmt)) {
        $pictures[] = $row['path'];
    }

    return $pictures;
}

function getPicturesAssoc($mysqliConnect, $gallery = '')
{
    $sql = 'SELECT * FROM pictures';
    if ($gallery) {
        $sql .= sprintf(' WHERE gallery="%s"', $gallery);
    }
    $stmt = mysqli_query($mysqliConnect, $sql);
    $pictures = [];
    while ($row = mysqli_fetch_assoc($stmt)) {
        $pictures[] = $row;
    }

    return $pictures;
}