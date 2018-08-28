<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users_detail extends Model
{

    /**
     * 与模型关联的数据表
     *
     * @var string
     */
        //设置前台用户信息模型表名
    public $table = 'users_detail';

    public $primaryKey = 'id';

    public $timestamps = false;


    // /**
    //  * 可以被批量赋值的属性。
    //  *
    //  * @var array
    //  */
    // //
    // // 性别 0是女 1是男,头像,地址,生日,个人简历,上次登陆时间,注册时间
    // protected $fillable = ['uid','sex','address','birthday','user_des','last_time','reg_time','nickname'];
   
   
    // 属于  其他用户的信息
    public function usersdetailUser()
    {
        return $this->belongsTo('App\User', 'uid');
    }
}
