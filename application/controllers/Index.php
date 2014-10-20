<?php
/**
 * Created by PhpStorm.
 * User: Talent Gao
 * Date: 14-9-25
 * Time: 下午2:09
 */
class IndexController extends Controller{

    private $_layout;

    public function init(){
        parent::init();
        $this->_layout = Yaf_Registry::get('layout');
    }

    public function indexAction(){

        $data = (new DemoModel())->selectInfo();

        var_dump($data);

        $this->_view->page = "+++++++++++++";
        /*layout*/
        $this->_layout->meta_title = 'A Blog';


    }

    //FastCache
    public function testAction(){
        phpFastCache::$storage = "auto";

        $cache = __c("memcache");
        $server = array(array("127.0.0.1",11211,100));
        $cache->option("server", $server);

        $cache->keyword = array("something here++++++++++++++++_________", 600);
        var_dump($cache->get("31lh9kj9cs3627fauu90njuj26"));
        var_dump($cache->keyword);

        die();
    }

    //判定登陆设备
    public function test2Action(){

        $detect = new MobileDetect;
        $deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
        $scriptVersion = $detect->getHttpHeaders();
        $mobileGrade = $detect->mobileGrade();
        var_dump($deviceType."::".$mobileGrade);
        var_dump($scriptVersion);
        die();
    }

    //测试memcache session  提高session性能
    public function test3Action(){
        if (!isset($_SESSION['TEST'])) {
            $_SESSION['TEST'] = time();
        }

        $_SESSION['TEST3'] = time();

        print $_SESSION['TEST'];
        print "<br><br>";
        print $_SESSION['TEST3'];
        print "<br><br>";
        print session_id();

        die();
    }

    public function test4Action(){
        $redis = new Redis();
        $redis->connect("127.0.0.1","6379");  //php客户端设置的ip及端口
        //存储一个 值
        $redis->set("say","Hello World");
        echo $redis->get("say");     //应输出Hello World

        //存储多个值
        $array = array('first_key'=>'first_val',
            'second_key'=>'second_val',
            'third_key'=>'third_val');
        $array_get = array('first_key','second_key','third_key');
        $redis->mset($array);
        var_dump($redis->mget($array_get));
        die();
    }

    public function test5Action(){
        $redis = new RedisCluster();
        $redis->connect(array('host'=>'127.0.0.1','port'=>6379));

        //*
        $cron_id = 10001;
        $CRON_KEY = 'CRON_LIST'; //
        $PHONE_KEY = 'PHONE_LIST:'.$cron_id;//

        //cron info
        $cron = $redis->hget($CRON_KEY,$cron_id);
        if(empty($cron)){

            $cron = array('id'=>10,'name'=>'jackluo');//mysql data
            $redis->hset($CRON_KEY,$cron_id,$cron); // set redis
        }

        var_dump($cron);
        //phone list
        $phone_list = $redis->lrange($PHONE_KEY,0,-1);
        if(empty($phone_list)){
            $phone_list =explode(',','13228191831,18608041585');    //mysql data
            //join  list
            if($phone_list){
                $redis->multi();
                foreach ($phone_list as $phone) {
                    $redis->lpush($PHONE_KEY,$phone);
                }
                $redis->exec();
            }
        }

        var_dump($phone_list);

        die();

    }
}