<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Slid;
class SlidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   

        $search = $request -> input('search','');

        $data = Slid::where('id','like','%'.$search.'%') -> paginate(5);

        return view('admin.slid.index',['data'=>$data,'request'=>$request->all()]);
        //获取数据
        // $data = Slid::all();
        // dump($data);
        //加载模板
        return view('admin.slid.index',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        //加载模板
        return view('admin.slid.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        //检测文件是否存在
        if($request->hasfile('profile')){
            //创建文件上传对象
            $profile = $request -> file('profile');
            //创建文件名
            $temp_name = str_random(20);
            //获取后缀名
            $ext = $profile -> getClientOriginalExtension(); //后缀名
            //拼接文件名
            $name = $temp_name.'.'.$ext;
            //拼接路径
            $dir = './uploads/'.date('Ymd',time());
            //拼接向数据库存储的路径
            $filename = ltrim($dir.'/'.$name,'.');
            //上传
            $profile -> move($dir,$name);
            //写入数据库
            $slid = new Slid;
            $slid -> profile = $filename;
            $slid -> status = $request -> status;
            $res = $slid -> save();
            //跳转
            return redirect('/admin/slid');
        }else{
            return back();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       

    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // 强制删除
        $slids = Slid::find($id);
        $slids -> forceDelete();
        //返回模版
        return back()->with('删除成功');
    }

    /**
     * up the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function up($id)
    {
        
        $slid = Slid::find($id);
        $slid-> status = 2;
        $res = $slid -> save();
        return redirect('/admin/slid');
    }
     /**
     * down the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function down($id)
    {
        $slid = Slid::find($id);
        $slid-> status = 1;
        $res = $slid -> save();
        return redirect('/admin/slid');
        
    }
}
