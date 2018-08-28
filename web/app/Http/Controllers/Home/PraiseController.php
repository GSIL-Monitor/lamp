<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Link;
use App\Models\Mach;
use App\Models\Huida;
use DB;

class PraiseController extends Controller
{
    /**
     * 提交的问题点赞统计
     *
     * $id 指定提交问题ID的信息
     * 
     */
    public function zan($id)
    {
        $mach = Mach::find($id);
        $wzan=$mach -> wzan += 1 ;
        $mach -> wliulan += 1 ;
        $res = $mach ->save();
       if($res){
        echo $wzan;
       }else{
        echo 'error';
       }
    }

    /**
     * 提交的问题浏览统计
     *
     * $id 指定提交问题ID的信息
     * 
     */
    public function liulan($id)
    {
        $mach = Mach::find($id);
        $mach -> wliulan += 1 ;
        $mach ->save();
        
    }

    /**
     * 回答的问题点赞统计
     *
     * $id 指定回答问题ID的信息
     * 
     */
    public function rzan($id)
    {
        $mach = Huida::find($id);
        $mach -> rzan += 1 ;
        $mach -> rliulan += 1 ;
        $mach ->save();
        
    }

    /**
     * 回答的问题浏览统计
     *
     * $id 指定回答问题ID的信息
     * 
     */
    public function rliulan($id)
    {
        $mach = Huida::find($id);
        $mach -> rliulan += 1 ;
        $mach ->save();
        
    }
}
