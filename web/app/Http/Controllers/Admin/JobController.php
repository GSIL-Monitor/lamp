<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\JobStoreRequest;
use App\Http\Controllers\Controller;
use App\Models\Job;
use DB;
class JobController extends Controller
{

    /**
     * 后台加载广告列表页
     *
     * 
     */
    public function index(Request $request)
    {   

         //获取查询信息
        $search = $request -> input('search','');
        $count = $request -> input('count',5);
        //模糊查找
        $data = Job::where('jtitle','like','%'.$search.'%') -> paginate($count);
        //加载模板
        return view('admin.job.index',['data'=>$data,'title'=>'小广告管理列表','request'=>$request->all()]);
        
     }   

    /**
     * 加载广告添加页面
     *
     * 
     */
    public function create()
    {  
        //加载模板
        return view('admin.job.create',['title'=>'小广告添加']); 
    }

    /**
     * 存储添加广告信息到数据库
     *
     * JobStoreRequest 判断添加的信息规则
     * 图片处理
     */
    public function store(JobStoreRequest $request)
    {
        
         //检测文件是否存在
        if($request->hasfile('jpice')){
            //创建文件上传对象
            $jpice = $request -> file('jpice');
           
            //创建文件名
            $temp_name = str_random(20);
            //获取后缀名
            $ext = $jpice -> getClientOriginalExtension(); //后缀名
            //拼接文件名
            $name = $temp_name.'.'.$ext;
            //拼接路径
            $dir = './uploads/job_img/'.date('Ymd',time());
            //拼接向数据库存储的路径
            $filename = ltrim($dir.'/'.$name,'.');
            $jpice -> move($dir,$name);

            //上传 存储数据库
            $job = new Job;
            $job -> jpice = $filename;
            $job -> jstatus = $request -> jstatus;
            $job -> jtitle = $request ->input('jtitle');
            $job -> jphone = $request ->input('jphone');
            $job -> jhttp = $request ->input('jhttp');
            $job -> jcontent = $request ->input('jcontent');
            $res = $job -> save();
           //判断是否存储成功处理
            if ( $res ) {
                return redirect('admin/job') -> with('success','添加广告成功');
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
      
    }

    /**
     * 加载广告修改页
     *
     * $id 获取指定修改的ID信息
     * 
     */
    public function edit($id)
    {
       
        //加载模板
        return view('admin.job.edit',['job'=>Job::find($id),'title'=>'广告修改页']);
    }

    /**
     * 存储提交修改的信息到数据库
     *
     * $id 修改指定ID的广告相关信息
     * 
     * 处理是否有修改内容 进行处理判断存储
     */
    public function update(Request $request, $id)
    {
        DB::beginTransaction(); //开启事务

        //查询提交的ID信息
        $job =Job::find($id);
        //检测文件是否存在
        if($request->hasfile('jpice')){
            //创建文件上传对象
            $jpice = $request -> file('jpice');
           //创建文件名
            $temp_name = str_random(20);
            //获取后缀名
            $ext = $jpice -> getClientOriginalExtension(); //后缀名
            //拼接文件名
            $name = $temp_name.'.'.$ext;
            //拼接路径
            $dir = './uploads/job_img/'.date('Ymd',time());
            //拼接向数据库存储的路径
            $filename = ltrim($dir.'/'.$name,'.');
            //上传
            $jpice -> move($dir,$name);
            //写入数据库
            $job -> jpice = $filename;
        }   
            $job -> jstatus = $request -> jstatus;
            $job -> jtitle = $request ->input('jtitle');
            $job -> jphone = $request ->input('jphone');
            $job -> jhttp = $request ->input('jhttp');

            if( !empty($request ->input('jcontent') ) ){
                $job -> jcontent = $request ->input('jcontent');
            }
            $res = $job -> save();
           //判断是否存储成功处理
            if ( $res ) {
                DB::commit();   //事务提交
                return redirect('admin/job') -> with('success','修改广告成功');
            } else {
                DB::rollBock(); //回滚事务
                return back() -> with('error','修改广告失败');
            }
        
    }

     /**
     * 删除指定ID的广告信息
     *
     *
     * 
     */
    public function destroy($id)
    {
        DB::beginTransaction(); //开启事务
       
        //查询提交删除的ID信息 进行删除操作
        $res = Job::destroy($id);

        //判断是否删除成功
        if ( $res ) {
            DB::commit();   //事务提交
            return redirect('admin/job') -> with('success','删除广告成功');
        } else {
            DB::rollBock(); //回滚事务
            return back() -> with('error','删除广告失败');
        }
    }

    /**
     * 广告图片隐藏操作 默认状态为2隐藏状态 1为显示状态
     *
     * $id 处理指定ID的图片
     * 
     */
    public function up($id)
    {
        DB::beginTransaction(); //开启事务
        $job = Job::find($id);
        $job-> jstatus = 2;
        $res = $job -> save();
         //判断是否隐藏图片成功
        if ( $res ) {
            DB::commit();   //事务提交
            return redirect('admin/job') -> with('success','隐藏图片成功');
        } else {
            DB::rollBock(); //回滚事务
            return back() -> with('error','隐藏图片失败');
        }
    }

    /**
     * 广告图片显示操作 默认状态为2隐藏状态 1为显示状态
     *
     * $id 处理指定ID的图片
     * 
     */
    public function down($id)
    {
        DB::beginTransaction(); //开启事务
        $job = Job::find($id);
        $job-> jstatus = 1;
        $res = $job -> save();
         //判断是否显示图片成功
        if ( $res ) {
            DB::commit();   //事务提交
            return redirect('admin/job') -> with('success','显示图片成功');
        } else {
            DB::rollBock(); //回滚事务
            return back() -> with('error','显示图片失败');
        }
        
    }
    
}
