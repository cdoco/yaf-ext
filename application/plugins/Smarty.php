<?php
/**
 * Created by PhpStorm.
 * User: Talent Gao
 * Date: 14-8-26
 * Time: 下午4:38
 */

use \Yaf\Plugin_Abstract;
use \Yaf\Request_Abstract;
use \Yaf\Response_Abstract;
use \Yaf\Registry;

class SmartyPlugin extends Plugin_Abstract {

    /**
     * Smarty 对象
     * @var
     */
    private $_smarty;

    public function routerStartup(Request_Abstract $request, Response_Abstract $response) {}

    public function routerShutdown(Request_Abstract $request, Response_Abstract $response) {

        $this->_smarty = Registry::get("Smarty");

        $smarty_cfg = Registry::get("config")->get("smarty")->toArray();

        $this->_smarty->setScriptPath($smarty_cfg[strtolower($request->module)]['template_dir']);
        $this->_smarty->setCompilePath($smarty_cfg[strtolower($request->module)]['compile_dir']);

    }

    public function dispatchLoopStartup(Request_Abstract $request, Response_Abstract $response) {}

    public function preDispatch(Request_Abstract $request, Response_Abstract $response) {}

    public function postDispatch(Request_Abstract $request, Response_Abstract $response) {}

    public function dispatchLoopShutdown(Request_Abstract $request, Response_Abstract $response) {}

    public function preResponse(Request_Abstract $request, Response_Abstract $response) {}

}
