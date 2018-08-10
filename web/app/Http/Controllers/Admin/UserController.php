<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Admin_user;
use Hash;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.user.index');
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
    public function store(Request $request)
    {
        $this->validate($request, [
            'nickname' => 'required|unique:admin_users|regex:/^[a-zA-Z]{1}[\w]{5,17}$/',
            'tel' => 'required|regex:/^1[3,4,5,6,7,8,9]{1}[\d]{9}$/',
            'password' => 'required|regex:/^[\w]{5,17}$/',
            'repassword' => 'required|same:password',
            'power' => 'required',
        ],[
            'nickname.required'=>'用户名必填',
            'nickname.regex'=>'用户名格式不正确',
            'nickname.unique'=>'用户名已存在',
            'tel.required'=>'手机号必填',
            'tel.regex'=>'手机号格式不正确',
            'password.required'=>'密码必填',
            'password.regex'=>'密码格式不正确',
            'repassword.required'=>'确认密码必填',
            'repassword.same'=>'两次密码输入不一致',
            'power.required'=>'权限必须选择',
        ]);

        $users = new Admin_user;
        $users -> nickname = $request -> input('nickname');
        $users -> password = Hash::make($request -> input('password'));
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
        //
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
}
