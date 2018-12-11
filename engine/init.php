<?php

define('ROOT_DIR', __DIR__.'/../');
define('CALC_OPERATION_SUM', 'sum');
define('CALC_OPERATION_SUB', 'sub');
define('CALC_OPERATION_MULT', 'mult');
define('CALC_OPERATION_DIV', 'div');

$distConfig = require __DIR__.'/../config/config.dist.php';
$localConfig = require __DIR__.'/../config/config.php';

$config = array_merge($distConfig, $localConfig);

$mysqlConnect = mysqli_connect(
    $config['db_host'],
    $config['db_user'],
    $config['db_pass'],
    $config['db_name']
    );

require_once ROOT_DIR.'engine/funcs.php';
require_once ROOT_DIR.'engine/helpers.php';
require_once ROOT_DIR.'engine/repositories/product.model.php';
require_once ROOT_DIR.'engine/repositories/picture.model.php';
require_once ROOT_DIR.'engine/repositories/employee.model.php';