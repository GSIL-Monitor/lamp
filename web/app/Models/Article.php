<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //文章
    public $table = 'articles';
    public $primaryKey = 'id';
    public $timestamps = false;



}
