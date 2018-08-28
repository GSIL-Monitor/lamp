<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
   //前台用户
    public $table = 'users';
    public $primaryKey = 'id';
    public $timestamps = false;


}
