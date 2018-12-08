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