<?php

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
