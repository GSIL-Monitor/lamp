<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Link;
use App\Models\User;
use App\Models\Users_detail;

class GerenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\$id
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //查询友情链接所有状态为2(已审核)的数据
        $link = Link::where('status','=',2)->get();
        //获取用户数据
        $user = User::find( 1 );
        //加载个人信息模板
        return view('home.geren.index',[
            'link'=>$link,
            'user'=>$user
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //查询友情链接所有状态为2(已审核)的数据
        $link = Link::where('status','=',2)->get();
        //获取用户数据 
        $user = User::find(1);
        //加载个人信息模板
        return view('home.geren.edit',['link'=>$link,'user'=>$user]);
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
        // 获取用户修改信息
        $user = User::find($id);
        $user -> email =  $request -> input('email');
        $user -> phone =  $request -> input('phone');
        $res1 = $user -> save();
        // 获取用户详情修改信息
        $users_detail  = Users_detail::find($id);
        $users_detail -> nickname = $request -> input('nickname');
        $users_detail -> sex = $request -> input('sex');
        $users_detail -> age = $request -> input('age');
        $users_detail -> users_des = $request -> input('users_des');
        $users_detail -> hobby = $request -> input('hobby');
        $res2 = $users_detail -> save();
        // 判断
        if($res1 || $res1){
            return redirect('/home/geren');
        }else{
            return back();
        }
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //修改头像
    public function editprofile($id)
    {
        //查询友情链接所有状态为2(已审核)的数据
        $link = Link::where('status','=',2)->get();
        //获取用户数据
        $user = User::find($id);
        //加载个人信息模板
        return view('home.geren.profile',['link'=>$link,'user'=>$user]);
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //修改头像
    public function updateprofile(Request $request, $id)
    {
        //获取用户数据
        $user = User::find($id);
        //检测文件是否存在
        if($request->hasfile('profile')){
            //创建文件上传对象
            $profile = $request -> file('profile');
            // dd($profile);
            //创建文件名
            $temp_name = str_random(20);
            // dd($temp_name);
            //获取后缀名
            $ext = $profile -> getClientOriginalExtension(); //后缀名
            // dd($ext);
            //拼接文件名
            $name = $temp_name.'.'.$ext;
            //拼接路径
            $dir = './uploads/'.date('Ymd',time());
            //拼接向数据库存储的路径
            $filename = ltrim($dir.'/'.$name,'.');
            //上传
            $profile -> move($dir,$name);
            //写入数据库
            $users_detail  = Users_detail::find($id);
            $users_detail -> profile = $filename;
            $res = $users_detail -> save();
            return redirect('/home/geren');
        }else{
            return back();
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editpassword($id)
    {
        //查询友情链接所有状态为2(已审核)的数据
        $link = Link::where('status','=',2)->get();
        //获取用户数据
        $user = User::find(1);
        //加载个人信息模板
        return view('home.geren.password',['link'=>$link,'user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatepassword(Request $request, $id)
    {
        echo 111;
        // 获取用户修改密码信息
        // $user = User::find($id);
        // $user -> password =  $request -> input('password');
        // $user -> save();
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editusername($id)
    {
        //查询友情链接所有状态为2(已审核)的数据
        $link = Link::where('status','=',2)->get();
        //获取用户数据
        $user = User::find(1);
        //加载个人信息模板
        return view('home.geren.username',['link'=>$link,'user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //修改背景图片
    public function editbeijingpic($id)
    {
        //查询友情链接所有状态为2(已审核)的数据
        $link = Link::where('status','=',2)->get();
        //获取用户数据
        $user = User::find($id);
        // dd($user->Usersdetail-> beijingpic);
        //加载个人信息模板
        return view('home.geren.beijingpic',['link'=>$link,'user'=>$user]);
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //修改头像
    public function updatebeijingpic(Request $request, $id)
    {
        //获取用户数据
        $user = User::find($id);
        //检测文件是否存在
        if($request->hasfile('beijingpic')){
            //创建文件上传对象
            $beijingpic = $request -> file('beijingpic');
            //创建文件名
            $temp_name = str_random(20);
            // dd($temp_name);
            //获取后缀名
            $ext = $beijingpic -> getClientOriginalExtension(); //后缀名
            // dd($ext);
            //拼接文件名
            $name = $temp_name.'.'.$ext;
            //拼接路径
            $dir = './uploads/'.date('Ymd',time());
            //拼接向数据库存储的路径
            $filename = ltrim($dir.'/'.$name,'.');
            //上传
            $beijingpic -> move($dir,$name);
            //写入数据库
            $users_detail  = Users_detail::find($id);
            $users_detail -> beijingpic = $filename;
            $res = $users_detail -> save();
            return redirect('/home/geren');
        }else{
            return back();
        }
        
    }


}
