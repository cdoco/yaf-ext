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

//        $this->_request->getFiles("uploadify");
        $arr  = ['Tom' => 'kitty','Jerry' => 'gon'];

        print_r($arr);

        var_dump($arr);

        foreach($arr as $key => $val){
            echo $key . ':' . $val;
        }

        while(list($k,$v) = each($arr)){
            echo $k . $v;
        }

        each($arr);

        max(1,2);


        $xc = array_values($arr);

        for($i = 0;$i < count($xc);$i++){
            echo $xc[$i];
        }


    }
}