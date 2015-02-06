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

    /**
     * 根据Id删除一个用户
     *
     * @param int $user_id
     * @return Array
     */
    public function deleteUserByUserId($user_id = 155){

        return json_encode(DB::table("users")
            ->where("user_id",$user_id)
            ->get()
        );

    }

}
