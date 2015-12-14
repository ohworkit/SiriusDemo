<?php
/**
 * Created by PhpStorm.
 * User: jiangshengjun
 * Date: 15/11/26
 * Time: 下午12:14
 */

define("PUBLIC_PATH", __DIR__);

date_default_timezone_set("Asia/ShangHai");
$hostname = gethostname();
if(preg_match("/h(\d+)/",$hostname)){ //h1374 h1377
    //production environment
    define( "APP_ENVIRONMENT", "production" );
}else{
    //develop environment
    define( "APP_ENVIRONMENT", "develop" );
}

switch ( APP_ENVIRONMENT ) {
    case "production":
        error_reporting( DEBUG ? E_ALL : 0 );
        break;
    default:
        error_reporting( E_ALL );
        break;
}

require PUBLIC_PATH . "/../bootstrap.php";