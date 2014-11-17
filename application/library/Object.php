<?php
/**
 * Created by PhpStorm.
 * User: Talent Gao
 * Date: 14-9-22
 * Time: 下午7:33
 */

use \Yaf\Registry;

class Object extends \Illuminate\Database\Eloquent\Model{

    public function __construct(){

        $this->_cache = Registry::get("cache");

        parent::__construct();

    }
}