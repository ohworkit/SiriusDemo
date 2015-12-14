<?php
/**
 * Created by PhpStorm.
 * User: jiangshengjun
 * Date: 15/11/26
 * Time: 下午12:17
 */

/**
 * @var FastRoute\RouteCollector $r
 */
$r->addRoute('GET', '/', ["use"=>"IndexController@index","before"=>""]);
// {id} must be a number (\d+)
// The /{title} suffix is optional
//$r->addRoute('GET', '/articles/{id:\d+}[/{title}]', 'get_article_handler');