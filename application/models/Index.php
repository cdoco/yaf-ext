<?php
/**
 * Created by PhpStorm.
 * User: Talent Gao
 * Date: 14-8-19
 * Time: 下午2:26
 */

class IndexModel extends Object{

    public $timestamps = false;

    protected $table = 'users';

    protected $primaryKey = 'user_id';

    public function getUserInfo(){

        var_dump(DB::table("users")->count());

    }

}