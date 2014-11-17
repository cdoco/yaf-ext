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

class RoutesPlugin extends Plugin_Abstract {

    //在路由之前触发，这个是7个事件中, 最早的一个. 但是一些全局自定的工作, 还是应该放在Bootstrap中去完成
    public function routerStartup(Request_Abstract $request, Response_Abstract $response) {}

    //路由结束之后触发，此时路由一定正确完成, 否则这个事件不会触发
    public function routerShutdown(Request_Abstract $request, Response_Abstract $response) {

        //判定是否请求Admin模块
        $boolean = ($request->module === 'Index' && $request->controller === 'Admin') ? true : false;

        //修改Module Controller Action
        if($boolean){
            $request->module = 'Admin';
            $request->controller = ucfirst($request->action);
            $request->action = 'Index';
        }

    }

    //分发循环开始之前被触发
    public function dispatchLoopStartup(Request_Abstract $request, Response_Abstract $response) {}

    //分发之前触发    如果在一个请求处理过程中, 发生了forward, 则这个事件会被触发多次
    public function preDispatch(Request_Abstract $request, Response_Abstract $response) {}

    //分发结束之后触发，此时动作已经执行结束, 视图也已经渲染完成. 和preDispatch类似, 此事件也可能触发多次
    public function postDispatch(Request_Abstract $request, Response_Abstract $response) {}

    //分发循环结束之后触发，此时表示所有的业务逻辑都已经运行完成, 但是响应还没有发送
    public function dispatchLoopShutdown(Request_Abstract $request, Response_Abstract $response) {}

    public function preResponse(Request_Abstract $request, Response_Abstract $response) {}

}
