<?php

require_once '../engine/init.php';

$pageH1 = 'Калькулятор';
$pageTitle = 'Калькулятор';
$galleryType = '';
$search = $_GET['search'] ?? '';
$operationsSelect = [
    CALC_OPERATION_SUM => 'Сумма',
    CALC_OPERATION_SUB => 'Разность',
    CALC_OPERATION_MULT => 'Произведение',
    CALC_OPERATION_DIV => 'Деление',
];

$arg1 = 0;
$arg2 = 0;
$operation = CALC_OPERATION_SUM;
$result = '';
if ($_POST && isset($_POST['arg1']) && isset($_POST['arg2']) && isset($_POST['operation'])) {
    $arg1 = (int)$_POST['arg1'];
    $arg2 = (int)$_POST['arg2'];
    $operation = $_POST['operation'];
    $result = mathOperation($arg1, $arg2, $operation);
}

require '../templates/calc.php';