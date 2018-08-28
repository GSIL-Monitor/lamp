<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ForumsStoreRequest;
use App\Models\Link;
use App\Models\Mate;
use App\Models\Mach;
use DB;

class ForumsController extends Controller
{
    /**
     * 加载结伴同游的列表页
     *
     * 模糊搜索 最新发布排序
     */
    public function index(Request $request)
    {

        //获取查询信息
        $search = $request -> input('search','');
        //进行判断查找排序
        $mate = Mate::where('badd','like','%'.$search.'%')->orderBy('created_at','desc')->paginate(8);

        //加载模板
        return view('home.forums.index',['mate'=>$mate]);
    }

    /**
     * 加载结伴同游的发布页
     *
     * 实现发布信息
     */
    public function create()
    {
        //加载模板
        return view('home.forums.create');
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
     * 加载结伴同游的详情页
     *
     * $id 加载指定ID的详情信息页
     * 
     */
    public function edit($id)
    {
        //获取信息
        $mate = Mate::find($id);
         
       //加载模板
        return view('home.forums.thread',['mate'=>$mate,]);    
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
     * 结伴同游状态
     *
     * $id 获取指定发ID发布的信息 进行状态修改
     * 1为发布未结伴  2为发布已结伴
     */
    public function jieban($id)
    {
        DB::beginTransaction(); //开启事务
       
        //查询提交的ID信息
        $mate =Mate::find($id);
        //修改状态
        $mate -> status = 2 ;
        $res = $mate -> save();

        //判断是否修改成功处理
        if ( $res ) {
            DB::commit();   //事务提交
            return back() -> with('success','结伴提交成功');
        } else {
            DB::rollBock(); //回滚事务
            return back() -> with('error','结伴提交失败');
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function jiebanfabu(ForumsStoreRequest $request ,$id)
    {
       
        
        //检测文件是否存在
        if($request->hasfile('bpice')){
           //创建文件上传对象
            $bpice = $request -> file('bpice');
            //创建文件名
            $temp_name = str_random(20);
            //获取后缀名
            $ext = $bpice -> getClientOriginalExtension(); //后缀名
            //拼接文件名
            $name = $temp_name.'.'.$ext;
            //拼接路径
            $dir = './uploads/jieban_img/'.date('Ymd',time());
            //拼接向数据库存储的路径
            $filename = ltrim($dir.'/'.$name,'.');
            $bpice -> move($dir,$name);

            ////上传 获取数据保存到问题数据库 mates库
            $mate = new Mate;
            $mate -> uid = $id;
            $mate -> btitle = $request -> input('btitle');
            $mate -> badd = $request -> input('badd');
            $mate -> bsettime = $request -> input('bsettime');
            $mate -> bouttime = $request -> input('bouttime');
            $mate -> bphones = $request -> input('bphones');
            $mate -> content = $request -> input('content');
            $mate -> bpice = $filename;
            $res = $mate ->save();

             //判断是否存储成功处理
             if ( $res ) {
                 return redirect('home/forums') -> with('success','发布结伴成功');
             } else {
                 return back() -> with('error','发布结伴失败');
             }
         }else{
            return back();
        }
    }

}
