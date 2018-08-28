<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Users_detail;

class Users_detailController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
        //搜索关键词
        $search = $request -> input('search','');
        //每页显示条数
        $count = $request -> input('count',5);
        //设置标题
        $title = '用户列表';
        //获取数据
        $data = Users_detail::where('nickname','like','%'.$search.'%') -> paginate($count);
        //分配数据
        return view('admin.users_detail.index',[
            'data'=>$data,
            'request'=>$request->all(),
            'title'=>$title
        ]);
    }

  
}
