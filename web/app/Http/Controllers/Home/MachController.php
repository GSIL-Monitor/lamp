<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\MachStoreRequest;
use App\Models\Link;
use App\Models\Mach;
use App\Models\Huida;
use App\Models\Job;
use DB;

class MachController extends Controller
{
    /**
     * 加载回答问题的列表页
     *
     * 搜索 最新问题排序
     */
    public function index(Request $request)
    {  
        //获取查询信息
        $search = $request -> input('search');
        //获取所有的问题，以创建时间排序，分配给页面 如果输入搜索进行模糊查找
        $mach=Mach::where('wtitle','like','%'.$search.'%')-> orderBy('created_at','desc')->get();
        //获取广告信息 状态为1显示状态的所有数据，分配给模板
        $job =Job::where('jstatus',1)->get();
         //加载模板
        return view('home.mach.index',['mach'=>$mach,'job'=>$job]);
    }

    /**
     * 加载发布问题页
     *
     * 
     */
    public function create()
    {
        //加载模板
        return view('home.mach.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
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
     * 存储提交的问题到数据库
     *
     * $id 获取指定用户的id 存储数据库
     *
     */
    public function edit(MachStoreRequest $request , $id)
    {
        DB::beginTransaction();    //开启事务

        //获取数据保存到问题数据库 machs库
        $mach = new Mach;
        $mach -> uid = $id;
        $mach -> wtitle = $request -> input('wtitle');
        $mach -> wcontent = $request -> input('wcontent');
        $res = $mach ->save();

        //判断是否存储成功处理
        if ( $res ) {
            DB::commit();   //事务提交
            return redirect('home/mach') -> with('success','提交问题成功');
        } else {
            DB::rollBock(); //回滚事务
            return back() -> with('error','提交问题失败');
        }
        
    }
    /**
     * 存储回答问题的信息到数据库
     *
     * $id 提交问题的ID
     * 
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        DB::beginTransaction();    //开启事务

        //获取用户提交回答的问题 存储huidaku 数据库
        $huida = new Huida;
        $huida -> rid = $id;
        $huida -> rcomment = $request -> input('huida');
        $res = $huida ->save();

        //判断是否存储成功处理
        if ( $res ) {
            DB::commit();   //事务提交
            return back() -> with('success','回答问题成功');
        } else {
            DB::rollBock(); //回滚事务
            return back() -> with('error','回答问题失败');
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
        //
    }

    /**
     * 加载问题的详情页
     *
     * $id 加载指定ID的信息
     * 实现问题的回答显示 侧栏广告显示
     */
    public function detail($id)
    {
        //获取所有的问题，分配给页面
        $mach = Mach::find($id);
        //获取所有的回答的问题库，
        $hd = Huida::all();
        //获取广告信息 状态为1显示状态的所有数据，分配给模板
        $job =Job::where('jstatus',1)->get();
        //加载模板
        return view('home.mach.detail',['mach'=>$mach,'hd'=>$hd,'job'=>$job]);
    }


}
