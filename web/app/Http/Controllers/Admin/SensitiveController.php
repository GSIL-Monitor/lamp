<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Admin_sensitive;
use DB;

class SensitiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
         //获取数据
        $search = $request -> input('search','');//搜索关键词
        $count = $request -> input('count',5);//每页显示条数
        $data = Admin_sensitive::where('word','like','%'.$search.'%') -> paginate($count);
        return view('admin.sensitive.index',['title'=>'敏感词','data'=>$data,'request'=>$request->all()]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = Admin_sensitive::all();
        return view('admin.sensitive.create',['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        DB::beginTransaction();
        $word = new Admin_sensitive;
        $word-> word = $request -> input('word');

        $res1 = $word -> save();
        if($res1){
            DB::commit();
            return redirect('admin/sensitive')->with('success','添加成功');
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
        //
        $data = Admin_sensitive::find($id);
        return view('admin.sensitive.edit',['data'=>$data]);
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
        //
        $word = Admin_sensitive::find($id);
        $word -> word = $request->word;
        $res=$word -> save();
        if($res){
           return redirect('admin/sensitiven/index')->with('success','修改成功'); 
        }else{
            return back();
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
        //开启事务
        DB::beginTransaction();
        //删除
        $res = Admin_sensitive::destroy($id);
        if($res){
            //提交事务
            DB::commit();
            return back()->with('success','删除成功');
        }else{
            //回滚事务
            DB::rollBack();
            return back()->with('error','删除失败');
        }
    }
}
