<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;

class HuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //获取数据
        $search = $request -> input('search','');//搜索关键词
        $count = $request -> input('count',5);//每页显示条数
        $title = '用户列表';
        $data = User::where('username','like','%'.$search.'%') -> paginate($count);
        return view('admin.huser.index',['data'=>$data,'request'=>$request->all(),'title'=>$title]);
    }

    /**
     * up the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function up($id)
    {
        //禁用
        // dd($id);
        $user = User::find($id);
        $user-> status = 2;
        $res = $user -> save();
        return redirect('/admin/huser');
    }
     /**
     * down the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function down($id)
    {   
        //正常
        $user = User::find($id);
        $user-> status = 1;
        $res = $user -> save();
        return redirect('/admin/huser');
        
    }

}