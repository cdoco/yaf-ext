<?php
/**
 * Created by PhpStorm.
 * User: Talent Gao
 * Date: 14-9-17
 * Time: 下午4:09
 */
class DemoModel extends Zend_Db_Table {

    private $_table;

    protected function _setup()
    {
        $this->_name = 'slm_users';
        $this->_primary = 'user_id';
        parent::_setup();
    }

    public function getInfoByUserId(){

        $this->_table = new self();
//        $row = $this->_table->find(586);

        $db = $this->_table->getAdapter();

        $where = $db->quoteInto('login_name = ?', 'sumibuy_gao')
            . $db->quoteInto('AND password = ?', md5('qqqqqqqq'));

        $row = $this->_table->fetchRow($where);

        return $row;
    }

    public function insertInfo(){

        $this->_table = new self();

        $data = array(
            'login_name' => 'King',
            'password'  => md5('qqqqqqqq'),
        );

        $id = $this->_table->insert($data);

        return $id;
    }

    public function selectInfo(){
        $this->_table = new self();
        $db = $this->_table->getAdapter();

        $select = $db->select();

        $select->from('slm_users', '*')->limit(20,0)->where("user_id = 301");

        $sql = $select->__toString();
        echo $sql;
        $result = $db->fetchAll($sql);
//        $result=$this->_db_handler->fetchAll("select * from slm_users limit 20,20");

        return $result;
    }


}