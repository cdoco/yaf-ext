<?php

use \Yaf\Plugin_Abstract;
use \Yaf\Request_Abstract;
use \Yaf\Response_Abstract;
use \Yaf\Registry;

class LayoutPlugin extends Plugin_Abstract {

    private $_layoutDir;
    private $_layoutFile;
    private $_layoutVars =array();

    public function __construct($layoutFile, $layoutDir=null){
        $this->_layoutFile = $layoutFile;
        $this->_layoutDir = ($layoutDir) ? $layoutDir : APPLICATION_PATH.'/views/';
    }

    public function  __set($name, $value) {
        $this->_layoutVars[$name] = $value;
    }

    public function dispatchLoopShutdown ( Request_Abstract $request , Response_Abstract $response ){

    }

    public function dispatchLoopStartup ( Request_Abstract $request , Response_Abstract $response ){

    }

    public function postDispatch ( Request_Abstract $request , Response_Abstract $response ){
        /* get the body of the response */
        $body = $response->getBody();

        /*clear existing response*/
        $response->clearBody();

        /* wrap it in the layout */
        $layout = Registry::get("smarty");
        $layout->content = $body;
        $layout->assign('layout', $this->_layoutVars);

        /* set the response to use the wrapped version of the content */
        $response->setBody($layout->render($this->_layoutFile));
    }

    public function preDispatch ( Request_Abstract $request , Response_Abstract $response ){
 
    }

    public function preResponse ( Request_Abstract $request , Response_Abstract $response ){
        
    }

    public function routerShutdown ( Request_Abstract $request , Response_Abstract $response ){

    }

    public function routerStartup ( Request_Abstract $request , Response_Abstract $response ){

    }
}