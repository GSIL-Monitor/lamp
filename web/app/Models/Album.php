<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    
    public $table = 'albums';
    public $primaryKey = 'id';


	// 属于关系 相册属于个人用户
    public function albumuser()
    {
        return $this->belongsTo('App\User','uid');
    }

   // 属于关系 相册属于用户详情表的
    public function albumusersdetail()
    {
        return $this->belongsTo('App\Models\Users_detail','uid');
    }
}
