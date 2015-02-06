<?php

header("Content-Type: text/html;Charset=UTF-8");
define("APPLICATION_PATH",  realpath(dirname(__FILE__) . '/..'));

$application  = new \Yaf\Application(APPLICATION_PATH . "/conf/application.ini");

require_once APPLICATION_PATH .'/application/Functions.php';
require_once APPLICATION_PATH . '/conf/Config.inc.php';

$response = $application
    ->bootstrap()/*bootstrap是可选的调用*/
    ->run()/*执行*/;
