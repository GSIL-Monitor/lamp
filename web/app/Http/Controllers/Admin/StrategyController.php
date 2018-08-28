<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\StrategyStoreRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Strategy;
use DB;

class StrategyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //获取查询信息
        $search = $request -> input('search','');
        $count = $request -> input('count',5);
        $asc = $request -> input('asc','');
        $desc = $request -> input('desc','');
        if( !empty( $asc ) ){
            //升序排序
            $strategy = Strategy::orderBy('pdcaas')-> paginate($count);
        } else if( !empty( $desc ) ){
            //降序排序
            $strategy = Strategy::orderBy('pdcaas','desc')-> paginate($count);
        } else {
            //模糊查找
            $strategy = Strategy::where('smdd','like','%'.$search.'%') -> paginate($count);
        }
        //加载模板 分配变量
        return view('admin.strategy.index',['title'=>'最佳口碑榜管理列表','strategy'=>$strategy,'request'=>$request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.strategy.create',['title'=>'添加最佳口碑列表']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StrategyStoreRequest $request)
    {
        //检测文件是否存在
        if($request->hasfile('spice')){
            //创建文件上传对象
            $spice = $request -> file('spice');
           
            //创建文件名
            $temp_name = str_random(20);
            //获取后缀名
            $ext = $spice -> getClientOriginalExtension(); //后缀名
            //拼接文件名
            $name = $temp_name.'.'.$ext;
            //拼接路径
            $dir = './uploads/strategy_img/'.date('Ymd',time());
            //拼接向数据库存储的路径
            $filename = ltrim($dir.'/'.$name,'.');
            $spice -> move($dir,$name);

            //上传 存储数据库
            $strategy = new Strategy;
            $strategy -> spice = $filename;
            $strategy -> stitle = $request ->input('stitle');
            $strategy -> smdd = $request ->input('smdd');
            $strategy -> pdcaas = $request ->input('pdcaas');
            $strategy -> shttps = $request ->input('shttps');
            $strategy -> sbodys = $request ->input('sbodys');
            $res = $strategy -> save();
           //判断是否存储成功处理
            if ( $res ) {
                return redirect('admin/strategy') -> with('success','添加广告成功');
            } else {
                return back() -> with('error','添加广告失败');
            }
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
        //加载模板
        return view('admin.strategy.edit',['strategy'=>Strategy::find($id),'title'=>'最佳口碑修改页']);
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
         DB::beginTransaction(); //开启事务

        //查询提交的ID信息
        $strategy =Strategy::find($id);
        //检测文件是否存在
        if($request->hasfile('spice')){
            //创建文件上传对象
            $spice = $request -> file('spice');
           //创建文件名
            $temp_name = str_random(20);
            //获取后缀名
            $ext = $spice -> getClientOriginalExtension(); //后缀名
            //拼接文件名
            $name = $temp_name.'.'.$ext;
            //拼接路径
            $dir = './uploads/strategy_img/'.date('Ymd',time());
            //拼接向数据库存储的路径
            $filename = ltrim($dir.'/'.$name,'.');
            //上传
            $spice -> move($dir,$name);
            //写入数据库
            $strategy -> spice = $filename;
        }   
            $strategy -> stitle = $request ->input('stitle');
            $strategy -> smdd = $request ->input('smdd');
            $strategy -> pdcaas = $request ->input('pdcaas');
            $strategy -> shttps = $request ->input('shttps');

            if( !empty( $request ->input('sbodys') ) ){
                $strategy -> sbodys = $request ->input('sbodys');
            }
            $res = $strategy -> save();
           //判断是否存储成功处理
            if ( $res ) {
                DB::commit();   //事务提交
                return redirect('admin/strategy') -> with('success','修改最佳口碑榜成功');
            } else {
                DB::rollBock(); //回滚事务
                return back() -> with('error','修改最佳口碑榜失败');
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
        DB::beginTransaction(); //开启事务
       
        //查询提交删除的ID信息 进行删除操作
        $res = Strategy::destroy($id);

        //判断是否删除成功
        if ( $res ) {
            DB::commit();   //事务提交
            return redirect('admin/strategy') -> with('success','删除最佳口碑榜成功');
        } else {
            DB::rollBock(); //回滚事务
            return back() -> with('error','删除最佳口碑榜失败');
        }
    }
}
