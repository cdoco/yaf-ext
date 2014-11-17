<?php



use \Yaf\Controller_Abstract;
use \Yaf\Registry;

class Controller extends Controller_Abstract{

    //配置文件
    protected $_config;

    //Session
    protected $_session;

    //Layout
    protected $_layout;

    public function init(){
        $this->_config = Registry::get("config");

        $this->_session = \Yaf\Session::getInstance();
        $this->_session->start();

        $this->_layout = Registry::get('layout');

    }

}
