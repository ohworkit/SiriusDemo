<?php
/**
 * Created by PhpStorm.
 * User: jiangshengjun
 * Date: 15/11/26
 * Time: 下午1:12
 */


return ['connections' => [
    //master
    'default' => array(
        'driver' => 'mysql',
        'host' => '192.168.1.234',
        'database' => 'zhuanqian',
        'username' => 'dbaroot',
        'password' => '',
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix' => '',
    ),

    'db_slave' => array(
        'driver' => 'mysql',
        'host' => '192.168.1.234',
        'database' => 'zhuanqian',
        'username' => 'dbaroot',
        'password' => '',
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix' => '',
    ),
]];