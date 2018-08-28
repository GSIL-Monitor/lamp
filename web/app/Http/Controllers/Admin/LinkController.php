<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\UserStoreRequest;
use App\Http\Controllers\Controller;
use App\Models\Link;
use App\Http\Requests\LinkStoreRequest;
use DB;


class LinkController extends Controller
{
    /**
     * 后台友情链接列表页
     *
     * 
     */
    public function index(Request $request)
    {
        //获取查询信息
        $search = $request -> input('search','');
        $count = $request -> input('count',5);
        //模糊查找
        $data = Link::where('lname','like','%'.$search.'%') -> paginate($count);
        //加载模板
        return view('admin.link.index',['title'=>'友情链接--->管理列表','data'=>$data,'request'=>$request->all()]);
    }

    /**
     * 加载友情链接添加列表页
     *
     *
     */
    public function create()
    {
        //加载模板
        return view('admin.link.create',['title'=>'友情链接--->添加列表']);
    }

    /**
     * 存储友情连接列表页提交的信息到数据库
     *
     * LinkStoreRequest 判断添加友情链接规则
     * 
     */
    public function store(LinkStoreRequest $request)
    {
         DB::beginTransaction();    //开启事务
         
        //存储数据
        $link = new Link;
        $link -> lname = $request -> input('lname');
        $link -> lurl = $request -> input('lurl');
        $link -> lbody = $request -> input('lbody');
        $res = $link ->save();

        //判断是否存储成功处理
        if ( $res ) {
            DB::commit();   //事务提交
            return redirect('admin/link') -> with('success','添加友情链接成功');
        } else {
            DB::rollBock(); //回滚事务
            return back() -> with('error','添加友情链接失败');
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
     * 加载友情链接修改页
     *
     * $id 获取指定友情链接ID信息 加载到页面
     * 
     */
    public function edit(Request $request , $id)
    {
       //加载模板
        return view('admin.link.edit',['data'=>Link::find($id),'title'=>'友情链接--->修改操作']);
    }

    /**
     * 存储友情链接修改的信息到数据库
     *
     * $id 指定友情链接修改ID
     * 
     */
    public function update(Request $request , $id)
    {  

        DB::beginTransaction(); //开启事务
       
        //查询提交的ID信息
        $link =Link::find($id);
        //修改 存储
        $link -> lname = $request -> input('lname');
        $link -> lurl = $request -> input('lurl');
        $link -> lbody = $request -> input('lbody');
        $res = $link -> save();

        //判断是否修改成功处理
        if ( $res ) {
            DB::commit();   //事务提交
            return redirect('admin/link') -> with('success','修改友情链接成功');
        } else {
            DB::rollBock(); //回滚事务
            return back() -> with('error','修改友情链接失败');
        }

    }

    /**
     * 删除友情链接信息
     *
     * $id 指定友情链接删除ID
     * 
     */
    public function destroy($id)
    {
        DB::beginTransaction(); //开启事务
       
        //查询提交删除的ID信息 进行删除操作
        $res = Link::destroy($id);

        //判断是否删除成功
        if ( $res ) {
            DB::commit();   //事务提交
            return redirect('admin/link') -> with('success','删除友情链接成功');
        } else {
            DB::rollBock(); //回滚事务
            return back() -> with('error','删除友情链接失败');
        }
    }

    /**
     * 修改友情链接状态操作 1为未审核 2为已审核，审核状态可以显示
     *
     * $id 指定删除友情链接ID
     * 
     */
    public function eav($id)
    {
        DB::beginTransaction(); //开启事务
       
        //查询提交的ID信息
        $link =Link::find($id);
        //修改状态
        $link -> status = 2 ;
        $res = $link -> save();

        //判断是否修改成功处理
        if ( $res ) {
            DB::commit();   //事务提交
            return back() -> with('success','审核友情链接成功');
        } else {
            DB::rollBock(); //回滚事务
            return back() -> with('error','审核友情链接失败');
        }
    }
}
