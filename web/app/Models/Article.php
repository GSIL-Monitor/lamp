<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;
    /**
     * 与模型关联的数据表
     *
     * @var string
     */
    //设置前台文章模型表名
    public $table = 'articles';

    public $primaryKey = 'id';

    // public $timestamps = true;
    
    // protected $dates = ['deleted_at'];
    
    // 属于关系 文章属于用户
    public function articlesuser()
    {
        return $this->belongsTo('App\User','uid');
    }
    
    // 属于关系 文章属于用户详情表的
    public function articlesusersdetail()
    {
        return $this->belongsTo('App\Models\Users_detail','uid');
    }

    // 多对多 文章被多个用户收藏
    public function articlesshoucang()
    {
        return $this->belongsToMany('App\User','user_d_art','aid','uid');
    }
    
}
