<?php

$distConfig = require __DIR__.'/../config/config.dist.php';
$localConfig = require __DIR__.'/../config/config.php';

$config = array_merge($distConfig, $localConfig);

$mysqlConnect = mysqli_connect(
    $config['db_host'],
    $config['db_user'],
    $config['db_pass'],
    $config['db_name']
    );

require_once '../engine/funcs.php';
require_once '../engine/helpers.php';
require_once '../engine/repositories.php';