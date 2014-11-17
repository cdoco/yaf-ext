<?php
/**
 * @name Bootstrap
 * @author {&$AUTHOR&}
 * @desc 所有在Bootstrap类中, 以_init开头的方法, 都会被Yaf调用,
 * @see http://www.php.net/manual/en/class.yaf-bootstrap-Abstract.php
 * 这些方法, 都接受一个参数:Yaf_Dispatcher $dispatcher
 * 调用的次序, 和申明的次序相同
 */

use \Yaf\Application;
use \Yaf\Registry;
use \Yaf\Loader;
use \Yaf\Dispatcher;
use \Yaf\Bootstrap_Abstract;

class Bootstrap extends Bootstrap_Abstract{

    private $_config;

    public function _initConfig() {
		//把配置保存起来
        $this->_config = Application::app()->getConfig();
		Registry::set('config', $this->_config);
	}

    public function _initLocalName() {
        Loader::getInstance()->registerLocalNamespace(array(
            'Smarty','Swift','Munee'
        ));
    }

    public function _initPlugin(Dispatcher $dispatcher) {

        /**
         * register Routes plugin
         */
        $routes = new RoutesPlugin();
        $dispatcher->registerPlugin($routes);

        /**
         * register Smarty plugin
         */
        $smarty = new SmartyPlugin();
        $dispatcher->registerPlugin($smarty);

    }

    public function _initErrors(){
        if($this->_config->application->showErrors){
            error_reporting (-1);
            define('DEBUG_MODE', false);
            //报错是否开启
            ini_set('display_errors','On');
        }else{
            error_reporting (-1);
            define('DEBUG_MODE', false);
            ini_set('display_errors', 'Off');
        }
    }

    //初始化Eloquent Orm
    public function _initEloquentORM(){

        Loader::import("vendor/autoload.php");
        $capsule = new \Illuminate\Database\Capsule\Manager();

        $capsule->addConnection(
            $this->_config->orm->eloquent->toArray());

        $capsule->bootEloquent();

        $capsule->setAsGlobal();

    }

    public function _initCache(){
        //$servers = array();
        $cacheCfg = $this->_config->memcached->config;
        $servers = $cacheCfg->toArray();
        if(!empty($servers)){
            phpFastCache::$storage = "auto";

            $cache = __c($cacheCfg->type);
            $server = array(array($cacheCfg->host,$cacheCfg->port,$cacheCfg->timeout));
            $cache->option("server", $server);

            Registry::set("cache", $cache);
        }


    }


    public function _initRoute(Dispatcher $dispatcher) {
		//在这里注册自己的路由协议,默认使用简单路由
        $router = Dispatcher::getInstance()->getRouter();
        /**
         * add the routes defined in ini config file
         */
        $router->addConfig(Registry::get("config")->routes);
	}

    public function _initSmarty(Dispatcher $dispatcher) {
        Loader::import("smarty/Adapter.php");
        $smarty = new Smarty_Adapter(null, Registry::get("config")->get("smarty")->get("index"));
        Registry::set("smarty", $smarty);
        $dispatcher->setView($smarty);
    }

    public function _initLayout(Dispatcher $dispatcher){
        /*layout allows boilerplate HTML to live in /views/layout rather than every script*/
        $layout = new LayoutPlugin('layout/layout.html');

        /* Store a reference in the registry so values can be set later.
         * This is a hack to make up for the lack of a getPlugin
         * method in the dispatcher.
         */
        Registry::set('layout', $layout);

        /*add the plugin to the dispatcher*/
        $dispatcher->registerPlugin($layout);
    }


}
