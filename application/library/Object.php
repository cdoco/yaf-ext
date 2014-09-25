<?php
/**
 * Created by PhpStorm.
 * User: Talent Gao
 * Date: 14-9-22
 * Time: 下午7:33
 */
class Object extends Zend_Db_Table{

    public function __construct(){

        $this->_config = Yaf_Registry::get("config");

        $dbPrefix = $this->_config->database->zend->dbprefix;
        $this->_name = $dbPrefix.$this->_name;

        $this->_cache = Yaf_Registry::get("cache");

        parent::__construct();

    }
}