<?php
/**
 * Created by PhpStorm.
 * User: jiangshengjun
 * Date: 15/12/4
 * Time: 下午10:19
 */

Filter::before(function(){
    //session start
    if (Config::get("session.autostart")) {
        Session::start();
    }
});

/**
Filter::add("hello",function(){
    //business
});
*/

Filter::after(function(){
    //todo
});