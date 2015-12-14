<?php
/**
 * Created by PhpStorm.
 * User: jiangshengjun
 * Date: 15/11/26
 * Time: 下午12:14
 */

// BASE_PATH
define('BASE_PATH', __DIR__);

// Autoload
require BASE_PATH.'/vendor/autoload.php';

$app = new \Sirius\Sirius();
$app->run();