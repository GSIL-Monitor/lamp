<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Admin_cates;
use DB;

class CatesController extends Controller
{
    public static function getCates()
    {
        // $sql = "select *,concat(path,',',id) as paths from admin_cates order by paths asc";
        // $data = \DB::select($sql);
        $data = Admin_cates::select('*',DB::raw('concat(path,",",id) as paths'))->orderBy('paths','asc')->get();
        foreach ($data as $key => $value) {
            $n = substr_count($value->path, ',');    // 统计,出现的次数
            $data[$key]->cname = str_repeat('|----', $n).$value->cname; // 处理分类名称
        }
        return $data;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 加载模板
        return view('admin.cates.index',['data'=>self::getCates()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 添加页面
        return view('admin.cates.create',['title'=>'分类添加','data'=>self::getCates()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 接收父级的id        
        $pid = $request -> input('pid');
        $cates = new Admin_cates;
        $cates -> cname = $request ->input('cname');
        $cates -> pid = $pid;
        if($pid == 0){
            // 顶级分类
            $cates -> path = $pid;
        }else{
            // 处理路径
            $parent_data = Admin_cates::find($pid);   // 查询父级的数据
            $cates -> path = $parent_data -> path.','.$parent_data -> id;
        }
        // 添加
        if($cates -> save()){
            return redirect('admin/cates')->with('success','添加成功');
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
        // 获取数据
        $cate = Admin_cates::find($id);
        return view('admin.cates.edit',['title'=>'修改分类','cate'=>$cate,'data'=>self::getCates()]);
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
        // 接收修改的数据
        // $data = $request -> all();
        // 当前类别下是否有子分类
        $parent = Admin_cates::where('pid',$id)->first();
        if (!empty($parent)) {
            return back()->with('error','当前类别下有子分类,不允许修改');
            exit;
        }
        // 接收父级的id        
        $pid = $request -> input('pid');
        $cates = Admin_cates::find($id);
        $cates -> cname = $request ->input('cname');
        $cates -> pid = $pid;
        if($pid == 0){
            // 顶级分类
            $cates -> path = $pid;
        }else{
            // 处理路径
            $parent_data = Admin_cates::find($pid);   // 查询父级的数据
            $cates -> path = $parent_data -> path.','.$parent_data -> id;
        }
        // 修改
        if($cates -> save()){
            return redirect('admin/cates')->with('success','修改成功');
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
        // 当前类别下是否有子分类
        $parent = Admin_cates::where('pid',$id)->first();
        if (!empty($parent)) {
            return back()->with('error','当前类别下有子分类,不允许删除');
            exit;
        }
        // 修改
        if(Admin_cates::destroy($id)){
            return redirect('admin/cates')->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
}
