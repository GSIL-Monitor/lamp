<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Link;
use App\Models\Slid;


use App\Models\User;
use DB;
class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //查询友情链接所有状态为2(已审核)的数据
        $link = Link::where('status','=',2)->get();
        //查询撸轮播图所有状态为2(已审核)的数据
        $slid = Slid::where('status','=',2)->get();
        //获取用户数据   //构造器   表连接
        $userall = DB::table('users')
                ->join('users_detail', 'users.id', '=', 'users_detail.uid')
                ->join('articles', 'users.id', '=', 'articles.uid')
                ->orderBy('articles.created_at', 'desc')
                ->select('users.*', 'users_detail.*','articles.*')
                ->get();
         $userfoot = DB::table('users')
                ->join('users_detail', 'users.id', '=', 'users_detail.uid')
                ->join('articles', 'users.id', '=', 'articles.uid')
                ->orderBy('articles.likes', 'desc')
                ->limit(3)
                ->select('users.*', 'users_detail.*','articles.*')
                ->get();
        $userreadss = DB::table('users')
                ->join('users_detail', 'users.id', '=', 'users_detail.uid')
                ->join('articles', 'users.id', '=', 'articles.uid')
                ->orderBy('articles.reads', 'desc')
                ->limit(3)
                ->select('users.*', 'users_detail.*','articles.*')
                ->get();
        $userlikes = DB::table('users')
                ->join('users_detail', 'users.id', '=', 'users_detail.uid')
                ->join('articles', 'users.id', '=', 'articles.uid')
                ->orderBy('articles.likes', 'desc')
                ->limit(1)
                ->select('users.*', 'users_detail.*','articles.*')
                ->get();
         $userreads = DB::table('users')
                ->join('users_detail', 'users.id', '=', 'users_detail.uid')
                ->join('articles', 'users.id', '=', 'articles.uid')
                ->orderBy('articles.reads', 'desc')
                ->limit(1)
                ->select('users.*', 'users_detail.*','articles.*')
                ->get();
        //加载模板 分配变量
        return view('home.index.index',[
                'link'=>$link,
                'slid' => $slid,
                'userall'=>$userall,
                'userfoot'=>$userfoot,
                'userlikes'=>$userlikes,
                'userreads'=>$userreads,
                'userreadss'=>$userreadss,
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
