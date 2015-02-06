<?php
/**
 * Created by PhpStorm.
 * User: Talent Gao
 * Date: 14-8-26
 * Time: 下午4:07
 */
class IndexController extends Controller
{
    public function init()
    {
        parent::init();
    }

    public function indexAction(){
        $server = new Yar_Server(new RedisCluster());
        $server->handle();
        die();
    }

    public function searchAction(){
        echo "=================IndexSearch";

        die();
    }
}