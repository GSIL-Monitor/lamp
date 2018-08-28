<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Admin_set;
use DB;

class SetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 获取数据
        $data = Admin_set::all();
        // 加载模板
        return view('admin.set.index',['data'=>$data,'title'=>'浏览设置']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = Admin_set::all();
        return view('admin.set.create',['title'=>'添加基础','data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 检测是否有文件上传
        if($request -> hasFile('logo')){
            $profile =  $request -> file('logo');// 创建上传对象
            // 处理文件名称
            $temp_name = str_random(20);
            // 获取后缀
            $ext = $profile -> getClientOriginalExtension();
            // 拼接后缀名
            $name = $temp_name.'.'.$ext;
            // 拼接路径
            $dir = './uploads/logo/'.date('Ymd',time());
            // 拼接向数据库存储的文件路径
            $filename = ltrim($dir.'/'.$name,'.');
            // 执行上传
            $profile -> move($dir,$name);
        }else{
            dd('请选择文件');
        }
        //开启事务
        DB::beginTransaction();
        //插入数据库
        $set_name = new Admin_set;
        $set_name -> copyright = $request -> input('copyright');
        $set_name -> law = $request -> input('law');
        $set_name -> logo  = $filename;
       
        $res = $set_name -> save();
        if($res){
            DB::commit(); //提交事务
            return redirect('/admin/set')->with('success','添加成功');
        }else{
            DB::rollBack();
            return back()->with('error','添加失败');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // 获取数据
        $data = Admin_set::find($id);
        return view('admin.set.edit',['title'=>'修改基础信息','data'=>$data]);
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
         $profile =  $request -> file('logo');// 创建上传对象
        // 处理文件名称
        $temp_name = str_random(20);
        // 获取后缀
        $ext = $profile -> getClientOriginalExtension();
        // 拼接后缀名
        $name = $temp_name.'.'.$ext;
        // 拼接路径
        $dir = './uploads/logo/'.date('Ymd',time());
        // 拼接向数据库存储的文件路径
        $filename = ltrim($dir.'/'.$name,'.');
        // 执行上传
        $profile -> move($dir,$name);
        //开启事务
        DB::beginTransaction();
        //插入数据库
        $set_name = new Admin_set;
        $set_name -> copyright = $request -> input('copyright');
        $set_name -> law = $request -> input('law');
        $set_name -> logo  = $filename;
       
        $res = $set_name -> save();
        if($res){
            DB::commit(); //提交事务
            return redirect('/admin/set')->with('success','修改成功');
        }else{
            DB::rollBack();
            return back()->with('error','修改失败');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // 修改
        if(Admin_set::destroy($id)){
            return redirect('admin/set')->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
}
