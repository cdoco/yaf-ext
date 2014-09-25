<?php

/**
 * Created by PhpStorm.
 * User: Talent Gao
 * Date: 14-9-22
 * Time: 下午4:23
 */
class DemoController extends Controller{

    public function init(){}

    public function indexAction(){

        $this->_request->getFiles("uploadify");

    }
}