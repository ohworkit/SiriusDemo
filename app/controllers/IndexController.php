<?php
/**
 * Created by PhpStorm.
 * User: jiangshengjun
 * Date: 15/11/26
 * Time: 下午12:24
 */

class IndexController {
    public function indexAction(){
        Cookie::save("hello","world");

        //reids
        //SRedis::set("test",time());
        //SRedis::get("test");

        //Log
        //Log::useDailyFiles(BASE_PATH . "/app/logs/custom.log", 7);
        //Log::info("this is custom file");

        return View::make('index',["cookie"=>Cookie::get("hello")]);
    }

    public function userAction($id, $mobile) {
        return View::make('user',["id"=>$id,"mobile"=>$mobile]);
    }
}