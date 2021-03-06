<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Scenery;
class SceneryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request -> input('search','');//搜索关键词
        $data = Scenery::where('title','like','%'.$search.'%') ->  orderBy('id') -> paginate(5);
        return view('admin.scenery.index',['data'=>$data,'request'=>$request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.scenery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $scenery = new Scenery;
        //创建文件上传对象
        $picture = $request -> file('picture');
        //创建文件名
        $temp_name = str_random(20);
        //获取后缀名
        $ext = $picture -> getClientOriginalExtension(); //后缀名
        //拼接文件名
        $name = $temp_name.'.'.$ext;
        //拼接路径
        $dir = './uploads/'.date('Ymd',time());
        //拼接向数据库存储的路径
        $filename = ltrim($dir.'/'.$name,'.');
        //上传
        $picture -> move($dir,$name);
        $scenery -> title = $request -> input('title');
        $scenery -> content = $request -> input('content');
        $scenery -> address = $request -> input('address');
        $scenery -> picture = $filename;
        $res = $scenery -> save();
        if($res){
            return redirect('admin/scenery')->with('success','添加成功');
        }else{
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
        //获取数据
        $data = Scenery::find($id);
        return view('admin.scenery.edit',['data'=>$data]);
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
        $data = Scenery::find($id);
        if($request->hasfile('picture')){
            //创建文件上传对象
            $picture = $request -> file('picture');
            //创建文件名
            $temp_name = str_random(20);
            //获取后缀名
            $ext = $picture -> getClientOriginalExtension(); //后缀名
            //拼接文件名
            $name = $temp_name.'.'.$ext;
            //拼接路径
            $dir = './uploads/'.date('Ymd',time());
            //拼接向数据库存储的路径
            $filename = ltrim($dir.'/'.$name,'.');
            //上传
            $picture -> move($dir,$name);
            $data -> picture = $filename;
        }else{
            $data -> picture = $data['picture'];
        }
        $data -> title = $request -> input('title');
        $data -> content = $request -> input('content');
        $data -> address = $request -> input('address');
        $res = $data -> save();
        if($res){
            return redirect('admin/scenery')->with('success','修改成功');
        }else{
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
        //删除数据
        $res = Scenery::destroy($id);
        if($res){
            return redirect('admin/scenery')->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
}
