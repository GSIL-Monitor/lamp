<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * 与模型关联的数据表
     *
     * @var string
     */
    //设置前台文章模型表名
    public $table = 'users';
    public $primaryKey = 'id';

    // 一对一 用户与详情表
    public function Usersdetail()
    {
        return $this->hasOne('App\Models\Users_detail','uid');
    }
    // 一对多  一个用户有多个文章
    public function Userarticles()
    {
        return $this->hasMany('App\Models\Article','uid');
    }

    // 一对多  一个用户有多个相册
    public function Useralbums()
    {
        return $this->hasMany('App\Models\Album','uid');
    }
    // 属于关系 文章属于用户
    public function articlesuser()
    {
        return $this->belongsTo('App\User','uid');
    }
    // // 多对多  多个用户有多个文章
    // public function Usersarticles()
    // {
    //     return $this->hasMany('App\Models\Article','uid');
    // }

    // public function UserComment()
    // {
    //     return $this->hasMany('App\Models\admin\Comment','uid');
    // }

    // public function UserReply()
    // {
    //     return $this->hasMany('App\Models\admin\Comment','uid');
    // }
   
}
