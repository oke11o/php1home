<?php

require_once '../engine/init.php';

$pageH1 = 'Калькулятор';
$galleryType = '';
$search = $_GET['search'] ?? '';
$operationsSelect = [
    CALC_OPERATION_SUM => 'Сумма',
    CALC_OPERATION_SUB => 'Разность',
    CALC_OPERATION_MULT => 'Произведение',
    CALC_OPERATION_DIV => 'Деление',
];

require '../templates/calc.php';