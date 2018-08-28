<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Travel;
class TravelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request -> input('search','');//搜索关键词
        $data = Travel::where('title','like','%'.$search.'%') ->  orderBy('id') -> paginate(5);
        $pic = [];
        foreach ($data as $key => $value) {
            $pic[$key] = explode(" ",$value['picture']);
        }
        return view('admin.travel.index',['data'=>$data,'pic'=>$pic,'request'=>$request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.travel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $travel = new Travel;
        //创建文件上传对象
        $picture = $request -> file('picture');
        $filename = [];
        foreach ($picture as $key => $value) {
            //创建文件名
            $temp_name = str_random(20);
            //获取后缀名
            $ext = $value -> getClientOriginalExtension(); //后缀名
            //拼接文件名
            $name = $temp_name.'.'.$ext;
            //拼接路径
            $dir = './uploads/'.date('Ymd',time());
            //拼接向数据库存储的路径
            $path = ltrim($dir.'/'.$name,'.');
            array_push($filename,$path);
            //上传
            $value -> move($dir,$name);
        }
        $filename = implode(" ",$filename);
        $travel -> title = $request -> input('title');
        $travel -> tag = $request -> input('tag');
        $travel -> day = $request -> input('day');
        $travel -> title = $request -> input('title');
        $travel -> content = $request -> input('content');
        $travel -> address = $request -> input('address');
        $travel -> picture = $filename;
        $res = $travel -> save();
        if($res){
            return redirect('admin/travel')->with('success','添加成功');
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
        $data = Travel::find($id);
        $pic = explode(" ",$data['picture']);
        return view('admin.travel.edit',['data'=>$data,'pic'=>$pic]);
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
        $data = Travel::find($id);
        if($request->hasfile('picture')){
            //创建文件上传对象
            $picture = $request -> file('picture');
            $filename = [];
            foreach ($picture as $key => $value) {
                //创建文件名
                $temp_name = str_random(20);
                //获取后缀名
                $ext = $value -> getClientOriginalExtension(); //后缀名
                //拼接文件名
                $name = $temp_name.'.'.$ext;
                //拼接路径
                $dir = './uploads/'.date('Ymd',time());
                //拼接向数据库存储的路径
                $path = ltrim($dir.'/'.$name,'.');
                array_push($filename,$path);
                //上传
                $value -> move($dir,$name);
            } 
            $filename = implode(" ",$filename);
            $data -> picture = $filename;
        }else{
            $data -> picture = $data['picture'];
        }
        $data -> title = $request -> input('title');
        $data -> tag = $request -> input('tag');
        $data -> day = $request -> input('day');
        $data -> content = $request -> input('content');
        $data -> address = $request -> input('address');
        $res = $data -> save();
        if($res){
            return redirect('admin/travel')->with('success','修改成功');
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
        $res = Travel::destroy($id);
        if($res){
            return redirect('admin/travel')->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
}
