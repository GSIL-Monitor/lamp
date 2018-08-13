<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Admin_user;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\EditStoreRequest;
class UserController extends Controller
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
        $data = Admin_user::where('nickname','like','%'.$search.'%') -> paginate($count);
        return view('admin.user.index',['data'=>$data,'request'=>$request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStoreRequest $request)
    {
        
        $users = new Admin_user;
        $users -> nickname = $request -> input('nickname');
        $users -> password = md5($request -> input('password'));
        $users -> tel = $request -> input('tel');
        $users -> power = $request -> input('power');
        $res = $users -> save();
        if($res){
            return redirect('admin/user')->with('success','添加成功');
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
        $data = Admin_user::find($id);
        return view('admin.user.edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditStoreRequest $request, $id)
    {
         $users = Admin_user::find($id);
        $users -> nickname = $request -> input('nickname');
        $users -> tel = $request -> input('tel');
        $users -> power = $request -> input('power');
        $res = $users -> save();
        if($res){
            return redirect('admin/user')->with('success','修改成功');
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
        //删除用户
        $res = Admin_user::destroy($id);
        if($res){
            return redirect('admin/user')->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
}
