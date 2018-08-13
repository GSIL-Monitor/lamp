<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{	
	//友情链接表
    public $table = 'links';
    public $primaryKey = 'lid';
    public $timestamps = false;
}


