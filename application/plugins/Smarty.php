<?php
/**
 * Created by PhpStorm.
 * User: Talent Gao
 * Date: 14-8-26
 * Time: 下午4:38
 */
class SmartyPlugin extends Yaf_Plugin_Abstract {

    /**
     * Smarty 对象
     * @var
     */
    private $_smarty;

    public function routerStartup(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {}

    public function routerShutdown(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {

        $this->_smarty = Yaf_Registry::get("smarty");

        $smarty_cfg = Yaf_Registry::get("config")->get("smarty")->toArray();

        $this->_smarty->setScriptPath($smarty_cfg[strtolower($request->module)]['template_dir']);
        $this->_smarty->setCompilePath($smarty_cfg[strtolower($request->module)]['compile_dir']);

    }

    public function dispatchLoopStartup(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {}

    public function preDispatch(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {}

    public function postDispatch(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {}

    public function dispatchLoopShutdown(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {}

    public function preResponse(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {}

}
