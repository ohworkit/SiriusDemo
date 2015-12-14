<?php
/**
 * Created by PhpStorm.
 * User: jiangshengjun
 * Date: 15/12/3
 * Time: 下午9:42
 */

return [
    //memcache
    "memcache" => array(
        "default" => array(
            "servers" => [
                array("192.168.1.234",11211,5),
                //array(host,port,weight),
            ],
            "persistent_id" => null,
            "options" => array(
                Memcached::OPT_LIBKETAMA_COMPATIBLE => true,
                Memcached::OPT_PREFIX_KEY => "sirius:"
            ),
        ),

        //use ,memcache for session storage
        /**
        "session" => array(
            "servers" => [
                array("192.168.1.234",11211,5),
                //array(host,port,weight),
            ],
            "persistent_id" => null,
            "options" => array(
                Memcached::OPT_LIBKETAMA_COMPATIBLE => true,
                Memcached::OPT_PREFIX_KEY => "sirius:"
            ),
        ),
        */
    ),

    //redis
    "redis" => array(
        "default" => array(
            "parameters" => [
                'tcp://192.168.1.234?alias=master',
                //'tcp://10.0.0.2?alias=slave-01'
            ],
            "options" => [
                //'replication' => true,
                "prefix" => "sirius:",
            ],
        ),

        //use redis for session storage
        /**
        "session" => array(
            "parameters" => [
                'tcp://192.168.1.234?alias=master',
                //'tcp://10.0.0.2?alias=slave-01'
            ],
            "options" => [
                //'replication' => true,
                "prefix" => "sirius:",
            ],
        ),
        */
    ),
];