<?php

class Controller extends Yaf_Controller_Abstract{

    //配置文件
    protected $_config;

    //Session
    protected $_session;

    public function init(){
        $this->_config = Yaf_Registry::get("config");

        $this->_session = Yaf_Session::getInstance();
        $this->_session->start();

    }

}
