<?php
/**
 * Created by PhpStorm.
 * User: Talent Gao
 * Date: 14-8-26
 * Time: 下午4:07
 */
class IndexController extends Controller{

    public function init(){
        parent::init();
    }

    public function indexAction(){

//        $service = new Yar_Server(new CategoryModel());
//        $service->handle();

        $this->_view->page = "+++++++++++++";
        /*layout*/
        $this->_layout->meta_title = 'A Blog';


    }

    public function searchAction(){
        echo "=================IndexSearch";

        die();
    }
}