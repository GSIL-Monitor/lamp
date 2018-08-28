<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
     /**
     * 与模型关联的数据表
     *
     * @var string
     */
    //设置前台文章模型表名
    public $table = 'Messages';

    public $primaryKey = 'id';
}
