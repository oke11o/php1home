<?php

function getEmployees($mysqliConnect, $orderDir = 'ASC')
{
    $sql = sprintf("SELECT * FROM employee ORDER BY first_name %s;", $orderDir);
    $stmt = mysqli_query($mysqliConnect, $sql);
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