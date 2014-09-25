<?php
/**
 * Created by PhpStorm.
 * User: Talent Gao
 * Date: 14-8-26
 * Time: 下午6:49
 */
class SearchController extends Controller{

    public function init(){
        parent::init();
    }

    public function indexAction(){
        $q = strtolower(trim($_GET["q"]));

        if (preg_match("/\?|\*|#/",$q)) return; //非法字符

        $q_list = explode(" ",$q);//按空格分隔
        $total = count($q_list);

        //删除数组内的空元素
        if ( $total > 0 ){
            for ($i=0;$i<$total;$i++){
                if (empty($q_list[$i])){
                    unset($q_list[$i]);
                }
            }
        }
        array_unshift( $q_list, array_shift( $q_list ));
        $total = count($q_list);

        //只输入了一个关键字
        if ($total == 1){
            $items = array();

            //完全匹配查询
            $data = $this->_db_handler->fetchAll("SELECT `ex`.`product_code`,`ex`.`produceing_place` FROM `slm_product_ex_lib` `ex`
	        LEFT JOIN `slm_product_lib` `p` ON(`p`.`product_id` = `ex`.`product_id`)
	        WHERE ex.`product_code` = '{$q}' order by ex.`product_id`");
            $cnt = count($data);
            if ($cnt > 0){
                for ($i=0;$i<$cnt;$i++){
                    echo "{$data[$i]['product_code']}|{$data[$i]['produceing_place']}\n";
                }
            }

            //模糊查询
            $data = $this->_db_handler->fetchAll("SELECT ex.`product_code`,ex.`produceing_place` FROM `slm_product_ex_lib` ex
	        LEFT JOIN `slm_product_lib` `p` ON(`p`.`product_id` = `ex`.`product_id`)
	        WHERE ex.`product_code` like '%{$q}%' and  ex.`product_code` <> '{$q}' order by ex.`product_id`");
            $cnt = count($data);
            if ($cnt > 0){
                for ($i=0;$i<$cnt;$i++){
                    echo "{$data[$i]['product_code']}|{$data[$i]['produceing_place']}\n";
                }
            }
        }elseif ($total > 1){//多个关键字
            $str = "";
            for ($i=0;$i<$total;$i++){
                $str .= " and `product_code` like '%{$q_list[$i]}%'";
            }

            $data = $this->_db_handler->fetchAll("SELECT ex.`product_code`,ex.`produceing_place` FROM `slm_product_ex_lib` ex
	        LEFT JOIN `slm_product_lib` `p` ON(`p`.`product_id` = `ex`.`product_id`)
	        WHERE 1 {$str} order by ex.`product_id`");
            $cnt = count($data);
            if ($cnt > 0){
                for ($i=0;$i<$cnt;$i++){
                    echo "{$data[$i]['product_code']}|{$data[$i]['produceing_place']}\n";
                }
            }
        }else{
            $data = $this->_db_handler->fetchAll("SELECT ex.`product_code`,ex.`produceing_place` FROM `slm_product_ex_lib` ex
	        LEFT JOIN `slm_product_lib` `p` ON(`p`.`product_id` = `ex`.`product_id`) order by ex.`product_id`");
            $cnt = count($data);
            if ($cnt > 0){
                for ($i=0;$i<$cnt;$i++){
                    echo "{$data[$i]['product_code']}|{$data[$i]['produceing_place']}\n";
                }
            }
        }

        die();
    }

    public function testAction(){
        echo "++++++++++++++Test";

        die();
    }
}