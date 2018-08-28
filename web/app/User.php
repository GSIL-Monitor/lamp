<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
     //设置前台文章模型表名
    // protected $table = 'users';
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
     // 多对多  用户收藏多个文章
    public function Usersshoucang()
    {
        return $this->belongsToMany('App\Models\Article','user_d_art','uid','aid');
    }

}
